import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TimerOnchangesComponent } from './timer-onchanges.component';

describe('TimerOnchangesComponent', () => {
  let component: TimerOnchangesComponent;
  let fixture: ComponentFixture<TimerOnchangesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TimerOnchangesComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TimerOnchangesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
