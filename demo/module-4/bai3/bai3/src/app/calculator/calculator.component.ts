import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-calculator',
  templateUrl: './calculator.component.html',
  styleUrls: ['./calculator.component.scss']
})
export class CalculatorComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  output!: number;
  first!: number;
  second!: number;
  operator = '+';
  onFirstChange(value: any) {
    this.first = Number(value);
  }
  onSecondChange(value: any) {
    this.second = Number(value);
  }
  onSelectChange(value: string) {
    this.operator = value;
  }
  calculate() {
    switch (this.operator) {
      case '+':
        this.output = this.first + this.second;
        break;
      case '-':
        this.output = this.first - this.second;
        break;
      case '*':
        this.output = this.first * this.second;
        break;
      case '/':
        this.output = this.first / this.second;
        break;
    }
  }
}
