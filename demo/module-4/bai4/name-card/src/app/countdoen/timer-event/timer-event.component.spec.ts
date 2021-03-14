import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TimerEventComponent } from './timer-event.component';

describe('TimerEventComponent', () => {
  let component: TimerEventComponent;
  let fixture: ComponentFixture<TimerEventComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TimerEventComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TimerEventComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
