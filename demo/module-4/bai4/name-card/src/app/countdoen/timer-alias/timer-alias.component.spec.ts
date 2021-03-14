import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TimerAliasComponent } from './timer-alias.component';

describe('TimerAliasComponent', () => {
  let component: TimerAliasComponent;
  let fixture: ComponentFixture<TimerAliasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TimerAliasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TimerAliasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
