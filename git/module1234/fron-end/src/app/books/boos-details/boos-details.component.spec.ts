import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BoosDetailsComponent } from './boos-details.component';

describe('BoosDetailsComponent', () => {
  let component: BoosDetailsComponent;
  let fixture: ComponentFixture<BoosDetailsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BoosDetailsComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BoosDetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
