import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Boos } from '../boos';
import { BoosService } from '../boos.service';

@Component({
  selector: 'app-delete-books',
  templateUrl: './delete-books.component.html',
  styleUrls: ['./delete-books.component.css']
})
export class DeleteBooksComponent implements OnInit {

  id!: number;
  books!: any;
  constructor(private service: BoosService,
    private router: Router,
    private route: ActivatedRoute,
    private http: HttpClient) { }

  ngOnInit(): void {
    this.books = new Boos();

    this.id = this.route.snapshot.params['id'];
    console.log(this.id);
    this.service.showBooks(this.id).subscribe(
      data => {
        console.log(data);
        this.books = data;
      }, error => console.log(error)
    )

  }

  deleteBooks(id: number){
    this.service.deleteBooks(id).subscribe(
      data => {
        console.log(data);
        this.books = data;

      },error => console.log(error)
    )
  }
}
