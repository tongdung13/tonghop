import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-likes',
  templateUrl: './likes.component.html',
  styleUrls: ['./likes.component.scss']
})
export class LikesComponent implements OnInit {

  likes: number = 0;
  likeThis() {
    this.likes++;
  }
  constructor() { }

  ngOnInit(): void {
  }

}
