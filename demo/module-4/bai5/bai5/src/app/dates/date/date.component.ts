import { Component, OnInit } from '@angular/core';
import { DateUtilServiceService } from '../date-util-service.service';

@Component({
  selector: 'app-date',
  templateUrl: './date.component.html',
  styleUrls: ['./date.component.scss']
})
export class DateComponent implements OnInit {

  output = '';
  constructor(private dateUtilService: DateUtilServiceService) { }

ngOnInit() {
}

onChange(value: string | number | Date) {
  this.output = this.dateUtilService.getDiffToNow(value);
}
}
