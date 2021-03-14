import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PlayerComponent } from './youtube/player/player.component';
import { PlaylistComponent } from './youtube/playlist/playlist.component';

const routes: Routes = [
  { path: 'youtube', component: PlaylistComponent,
    children: [{ path: ':id', component: PlayerComponent}]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
