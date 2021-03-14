import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Boos } from '../boos';
import { BoosService } from '../boos.service';

@Component({
  selector: 'app-boos-details',
  templateUrl: './boos-details.component.html',
  styleUrls: ['./boos-details.component.css']
})
export class BoosDetailsComponent implements OnInit {

  id!: number;
  books!: any;
  constructor(private service: BoosService,
              private router: Router,
              private route: ActivatedRoute) { }

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

 
}
