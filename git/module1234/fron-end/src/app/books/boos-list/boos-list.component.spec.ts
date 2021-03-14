import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BoosListComponent } from './boos-list.component';

describe('BoosListComponent', () => {
  let component: BoosListComponent;
  let fixture: ComponentFixture<BoosListComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BoosListComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BoosListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
