import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';
import { JwtService } from '../jwt.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  signinForm: FormGroup;
  err: any = null;
  email = '';
  password = '';

  constructor(
    public router: Router,
    public fb: FormBuilder,
    public jwtService: JwtService,
  ) {
    this.signinForm = this.fb.group({
      email: [''],
      password: ['']
    })
  }

  ngOnInit() {
    this.onSubmit();
  }

  onSubmit() {
      this.jwtService.logIn(this.signinForm.value).subscribe(
        data => {
          localStorage.setItem('AccessToken', data.token)
          this.router.navigate(['product']);
          alert("dang nhap thanh cong");

        }, error => {
          console.log(error)
          alert("dang nhap that bai ")
        } 
      );
  }

  list()
  {
    this.router.navigate(['']);
  }
}
