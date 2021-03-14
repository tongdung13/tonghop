import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TemolateComponent } from './temolate.component';

describe('TemolateComponent', () => {
  let component: TemolateComponent;
  let fixture: ComponentFixture<TemolateComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TemolateComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TemolateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
