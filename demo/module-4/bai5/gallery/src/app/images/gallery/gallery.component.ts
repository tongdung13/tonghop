import { Component, Inject, OnInit, Optional } from '@angular/core';
import { GalleryConfig } from 'src/app/images-gallery/images-card/token';

@Component({
  selector: 'app-gallery',
  templateUrl: './gallery.component.html',
  styleUrls: ['./gallery.component.scss']
})
export class GalleryComponent implements OnInit {

  listImage = [
    'https://via.placeholder.com/1280x420/e91e63/ffffff?text=1',
    'https://via.placeholder.com/1280x420/e91e63/ffffff?text=2',
    'https://via.placeholder.com/1280x420/e91e63/ffffff?text=3',
    'https://via.placeholder.com/1280x420/e91e63/ffffff?text=4'
];
itemWidth!: number;
config = 4;
constructor(
    @Inject(GalleryConfig)
    @Optional()
        config: number
) {
    if (config) {
        this.config = config;
    }
}

ngOnInit() {
    this.itemWidth = 100 / this.config;
}

}
