import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import { DictionaryService, IWord } from '../dictionary.service';

@Component({
  selector: 'app-page',
  templateUrl: './page.component.html',
  styleUrls: ['./page.component.scss']
})
export class PageComponent implements OnInit {

  listWord: IWord[] = [];
  constructor(
    private dictionaryService: DictionaryService,
    public authService: AuthService
    ) { }

  ngOnInit() {
    this.listWord = this.dictionaryService.getAll();
  }

}
