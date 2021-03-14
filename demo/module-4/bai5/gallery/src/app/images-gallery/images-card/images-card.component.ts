import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-images-card',
  templateUrl: './images-card.component.html',
  styleUrls: ['./images-card.component.scss']
})
export class ImagesCardComponent implements OnInit {

  @Input() src = '';
  constructor() { }

  ngOnInit(): void {
  }

}
