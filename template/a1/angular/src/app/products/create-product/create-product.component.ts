import { Component, OnInit } from '@angular/core';
import { AngularFireStorage } from '@angular/fire/storage';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Observable } from 'rxjs';
import { finalize } from 'rxjs/operators';
import { ImageService } from '../image.service';
import { Product } from '../product';
import { ProductService } from '../product.service';

@Component({
  selector: 'app-create-product',
  templateUrl: './create-product.component.html',
  styleUrls: ['./create-product.component.scss']
})
export class CreateProductComponent implements OnInit {

  filter: any;
  product: any;
  productForm: any = FormGroup;
  selectedFire: File;
  srcImg: string;
  downloadURL: Observable<string>;
  uploadPercent: any;
  ib: any;
  constructor(private router: Router,
              private service: ProductService,
              private fb: FormBuilder,
              private imageService: ImageService,
              private storage: AngularFireStorage) { }

  ngOnInit(): void {
    this.product = new Product();
    this.productForm = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(6)]],
      position: ['', [Validators.required, Validators.minLength(6)]],
      office: ['', [Validators.required, Validators.minLength(6)]],
      age: ['', [Validators.required]],
      startDate: ['', [Validators.required, Validators.minLength(6)]],
      image: ['', [Validators.required]]
    });
    console.log(this.productForm);
  }

  createProduct()
  {
    this.product.image = this.srcImg;
    console.log(this.product);
    this.service.create(this.product).subscribe(
      data => {
          console.log(data);
          this.router.navigate(['product']);
          this.product = new Product();
          alert("them thanh cong");
      }, error => console.log(error)
    )
  }

  onSubmit() {
    console.log(this.productForm.value);
  }

  onFireSelected(event: any) {
    var n = Date.now();
    const file = event.target.files[0];
    const filePath = `RoomsImages/${n}`;
    const fileRef = this.storage.ref(filePath);
    const task = this.storage.upload(`RoomsImages/${n}`, file);
    task 
      .snapshotChanges()
      .pipe(
        finalize(() => {
          this.downloadURL = fileRef.getDownloadURL();
          this.downloadURL.subscribe(url => {
            if (url) {
              this.ib = url;
            }
            this.srcImg = url;
            console.log(this.ib);
          });
        })
      )
      .subscribe(url => {
        if (url) {
          console.log(url);
        }
      })
  }
}
