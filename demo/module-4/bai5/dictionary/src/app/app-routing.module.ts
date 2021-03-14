import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthGuard } from './dictionary/auth.guard';
import { DetailsComponent } from './dictionary/details/details.component';
import { PageComponent } from './dictionary/page/page.component';

const routes: Routes = [
  {
    path: 'dictionary', component: PageComponent,
    children: [
      {
        path: ':key', component: DetailsComponent,
        canActivate: [AuthGuard]
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
