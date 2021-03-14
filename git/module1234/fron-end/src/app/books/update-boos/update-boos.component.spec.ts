import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UpdateBoosComponent } from './update-boos.component';

describe('UpdateBoosComponent', () => {
  let component: UpdateBoosComponent;
  let fixture: ComponentFixture<UpdateBoosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ UpdateBoosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(UpdateBoosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
