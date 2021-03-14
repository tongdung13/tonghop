import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-logout',
  templateUrl: './logout.component.html',
  styleUrls: ['./logout.component.scss']
})
export class LogoutComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit(): void {
  }

  logout() {
    localStorage.removeItem("id_token");
    localStorage.removeItem("expires_at");
    this.router.navigate(['login']);
}

}
