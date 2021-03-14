import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { BoosService } from '../boos.service';

@Component({
  selector: 'app-boos-list',
  templateUrl: './boos-list.component.html',
  styleUrls: ['./boos-list.component.css']
})
export class BoosListComponent implements OnInit {

  books: any;
  constructor(private service: BoosService,
              private router: Router,
              private http: HttpClient) { }

  ngOnInit(): void {
    this.loadData();
  }

  loadData()
  {
    this.service.getAll().subscribe(
      data => {
        console.log(data);
        this.books = data;
      }, error => console.log(error)
    )
  }

 
}
