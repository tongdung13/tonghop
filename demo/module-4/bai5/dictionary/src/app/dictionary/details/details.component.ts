import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Subscription } from 'rxjs';
import { DictionaryService, IWord } from '../dictionary.service';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styleUrls: ['./details.component.scss']
})
export class DetailsComponent implements OnInit {

  word!: IWord;
  sub!: Subscription;
  constructor(
    private activatedRoute: ActivatedRoute,
    private dictionaryService: DictionaryService
    ) { }

  ngOnInit() {
    this.sub = this.activatedRoute.paramMap.subscribe((paramMap: ParamMap) => {
      const key: any = paramMap.get('key');
      const meaning = this.dictionaryService.search(key);
      this.word = {
        key: key,
        meaning: meaning
      };
    });
  }
  ngOnDestroy(): void {
    this.sub.unsubscribe();
  }


}
