import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreateBoosComponent } from './create-boos.component';

describe('CreateBoosComponent', () => {
  let component: CreateBoosComponent;
  let fixture: ComponentFixture<CreateBoosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreateBoosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CreateBoosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
