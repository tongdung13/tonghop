import { Component, OnInit, ElementRef } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { JwtService } from 'app/logins/jwt.service';


@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
    
  token: any;
     constructor(private service: JwtService,
                 private router: Router ) { }

    ngOnInit(){ }

    logout()
    {
      this.service.logOut(this.token).subscribe(
        data => {
          console.log(data);
          this.router.navigate['login'];
        }
      );
    }

    
}
