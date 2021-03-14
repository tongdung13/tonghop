import { Component, OnInit, TemplateRef, ViewChild } from '@angular/core';

@Component({
  selector: 'app-slide',
  templateUrl: './slide.component.html',
  styleUrls: ['./slide.component.scss']
})
export class SlideComponent implements OnInit {

  @ViewChild('tmpl') template!: TemplateRef<any>;
  constructor() { }

  ngOnInit(): void {
  }

}
