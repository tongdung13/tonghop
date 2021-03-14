import { TestBed } from '@angular/core/testing';

import { BoosService } from './boos.service';

describe('BoosService', () => {
  let service: BoosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(BoosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
