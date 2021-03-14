import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TimerEventAliasComponent } from './timer-event-alias.component';

describe('TimerEventAliasComponent', () => {
  let component: TimerEventAliasComponent;
  let fixture: ComponentFixture<TimerEventAliasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TimerEventAliasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TimerEventAliasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
