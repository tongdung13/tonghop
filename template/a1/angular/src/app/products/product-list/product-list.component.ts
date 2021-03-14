import { Component, OnInit } from '@angular/core';
import { ProductService } from '../product.service';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.scss']
})
export class ProductListComponent implements OnInit {

  products: any;
  filter: any;
  key: string = 'name'; //set default
  reverse: boolean = false;
  ac: number = 1;
  //initializing p to one
  p: number = 1;
  constructor(private service: ProductService) { }

  ngOnInit(): void {
    this.loadData();
    this.ac = 1;
  }

  loadData()
  {
    this.service.all().subscribe(
      data => {
        this.products = data;
        console.log(data);
      }, error => console.log(error)
    )
  }

  clickDelete(id: number)
  {
    if(confirm("ban co muon xoa khong" + id)) {
      this.service.delete(id).subscribe(
        data => {
          console.log(data);
          this.loadData();
        }, error => console.log(error)
      )
    }
  }

  
  sort(key){
    this.key = key;
    this.reverse = !this.reverse;
  }
}
