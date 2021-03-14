import { Component, OnInit } from '@angular/core';
import { from } from 'rxjs';
import { navItems } from '../../_nav';
@Component({
  selector: 'app-layout',
  templateUrl: './layout.component.html',

})
export class LayoutComponent implements OnInit {

  public sidebarMinimized = false;
  public navItems = navItems;
  constructor() { }

  ngOnInit(): void {
  }

  toggleMinimize(e: any) {
    this.sidebarMinimized = e;
  }

}
