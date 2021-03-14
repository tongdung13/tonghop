import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TimerGetSetComponent } from './timer-get-set.component';

describe('TimerGetSetComponent', () => {
  let component: TimerGetSetComponent;
  let fixture: ComponentFixture<TimerGetSetComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TimerGetSetComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TimerGetSetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
