import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { TodoComponent } from './todo/todo.component';
import { RegisterComponent } from './logins/register/register.component';
import { LoginComponent } from './logins/login/login.component';
import { RegisterFinalComponent } from './logins/register-final/register-final.component';
import { TemolateComponent } from './logins/temolate/temolate.component';

@NgModule({
  declarations: [
    AppComponent,
    TodoComponent,
    RegisterComponent,
    LoginComponent,
    RegisterFinalComponent,
    TemolateComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
