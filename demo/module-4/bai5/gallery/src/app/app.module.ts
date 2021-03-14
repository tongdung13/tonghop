import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ImagesCardComponent } from './images-gallery/images-card/images-card.component';
import { GalleryConfig } from './images-gallery/images-card/token';
import { GalleryComponent } from './images/gallery/gallery.component';

@NgModule({
  declarations: [
    AppComponent,
    ImagesCardComponent,
    GalleryComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [
    {provide: GalleryConfig, useValue: 2}
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
