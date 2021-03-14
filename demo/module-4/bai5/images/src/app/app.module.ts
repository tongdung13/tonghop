import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AuthService } from './auth.service';
import { ImgSliderComponent } from './img-slider/img-slider.component';
import { SlideComponent } from './img-slider/slide/slide.component';
import { ContentProjectionComponent } from './content-projection/content-projection.component';
import { ContentChildComponent } from './content-projection/content-child/content-child.component';
import { CpCardComponent } from './content-projection/cp-card/cp-card.component';



@NgModule({
  declarations: [
    AppComponent,
    ImgSliderComponent,
    SlideComponent,
    ContentProjectionComponent,
    ContentChildComponent,
    CpCardComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [
    {provide: AuthService, useClass: AuthService},
    {provide: 'API_ENDPOINT', useValue: 'http://api.example.com'},
    {provide: 'API_URL', useExisting: 'API_ENDPOINT'},
    {
      provide: 'some-token',
      useFactory: function() {
        return Math.random();
      }
    }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
