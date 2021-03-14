import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-color',
  templateUrl: './color.component.html',
  styleUrls: ['./color.component.scss']
})
export class ColorComponent implements OnInit {

  background = '#00e067';
  constructor() { }

  ngOnInit(): void {
  }

  onChange(value: string) {
    this.background = value;
  }

}
