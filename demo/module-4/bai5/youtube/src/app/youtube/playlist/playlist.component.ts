import { Component, OnInit } from '@angular/core';
import { YoutubeService } from '../youtube.service';

@Component({
  selector: 'app-playlist',
  templateUrl: './playlist.component.html',
  styleUrls: ['./playlist.component.scss']
})
export class PlaylistComponent implements OnInit {

  constructor(public youtubeService: YoutubeService) { }

  ngOnInit(): void {
  }

}
