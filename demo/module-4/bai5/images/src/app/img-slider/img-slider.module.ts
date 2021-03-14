import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ImgSliderComponent } from './img-slider.component';
import { SlideComponent } from './slide/slide.component';



@NgModule({
  
  imports: [
    CommonModule
  ],
  declarations: [ImgSliderComponent, SlideComponent],
  exports: [ImgSliderComponent, SlideComponent],
})
export class ImgSliderModule { }
