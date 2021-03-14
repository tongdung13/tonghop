import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { GalleryComponent } from './gallery.component';
import { ImagesCardComponent } from 'src/app/images-gallery/images-card/images-card.component';



@NgModule({

  imports: [
    CommonModule
  ],
  declarations: [GalleryComponent, ImagesCardComponent],
  exports: [ImagesCardComponent]
})
export class GalleryModule { }
