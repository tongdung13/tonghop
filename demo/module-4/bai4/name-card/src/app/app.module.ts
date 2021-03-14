import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NameCardComponent } from './name-card/name-card.component';
import { ProgressBarComponent } from './progress-bar/progress-bar.component';
import { TimerComponent } from './countdoen/timer/timer.component';
import { TimerAliasComponent } from './countdoen/timer-alias/timer-alias.component';
import { TimerEventComponent } from './countdoen/timer-event/timer-event.component';
import { TimerEventAliasComponent } from './countdoen/timer-event-alias/timer-event-alias.component';
import { TimerGetSetComponent } from './countdoen/timer-get-set/timer-get-set.component';
import { TimerOnchangesComponent } from './countdoen/timer-onchanges/timer-onchanges.component';
import { RaitingBarComponent } from './raiting-bar/raiting-bar.component';

@NgModule({
  declarations: [
    AppComponent,
    NameCardComponent,
    ProgressBarComponent,
    TimerComponent,
    TimerAliasComponent,
    TimerEventComponent,
    TimerEventAliasComponent,
    TimerGetSetComponent,
    TimerOnchangesComponent,
    RaitingBarComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
