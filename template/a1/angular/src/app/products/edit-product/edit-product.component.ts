import { Component, OnInit } from '@angular/core';
import { AngularFireStorage } from '@angular/fire/storage';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Observable } from 'rxjs';
import { finalize } from 'rxjs/operators';
import { Product } from '../product';
import { ProductService } from '../product.service';

@Component({
  selector: 'app-edit-product',
  templateUrl: './edit-product.component.html',
  styleUrls: ['./edit-product.component.scss']
})
export class EditProductComponent implements OnInit {

  selectedFire: File;
  srcImg: string;
  downloadURL: Observable<string>;
  uploadPercent: any;
  ib: any;
  filter: any;
  product: any;
  id!: number;
  productForm: any = FormGroup;
  constructor(
    private service: ProductService,
    private fb: FormBuilder,
    private router: Router,
    private route: ActivatedRoute,
    private storage: AngularFireStorage
  ) { }

  ngOnInit(): void {

    this.id = this.route.snapshot.params['id'];
    this.product = new Product();
    this.service.show(this.id).subscribe(
      data => {
        this.product = data;
        console.log(data);
      }, error => console.log(error)
    )

    this.productForm = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(6)]],
      position: ['', [Validators.required, Validators.minLength(6)]],
      office: ['', [Validators.required, Validators.minLength(6)]],
      age: ['', [Validators.required]],
      startDate: ['', [Validators.required, Validators.minLength(6)]]
    })
  }

  clickEdit()
  {
    this.product.image = this.srcImg;
    console.log(this.product);
    this.service.edit(this.id, this.product).subscribe(
      data => {
        console.log(data);
        this.router.navigate(['product']);
        alert("sua thanh cong");
      }, error => console.log(error)
    )
  }

  onSubmit()
  {
    console.log(this.productForm);
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
