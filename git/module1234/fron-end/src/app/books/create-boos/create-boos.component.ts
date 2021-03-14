import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Boos } from '../boos';
import { BoosService } from '../boos.service';

@Component({
  selector: 'app-create-boos',
  templateUrl: './create-boos.component.html',
  styleUrls: ['./create-boos.component.css']
})
export class CreateBoosComponent implements OnInit {

  books: any;
  constructor(private service: BoosService,
              private router: Router) { }

  ngOnInit(): void {
    this.books = new Boos();
  }

  addBooks()
  {
    this.service.addBooks(this.books).subscribe(
      data => {
        console.log(data);
        this.router.navigate(['books']);
        this.books = new Boos();
      }, error => console.log(error)
    )
  }

}
