import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BoosDetailsComponent } from './books/boos-details/boos-details.component';
import { BoosListComponent } from './books/boos-list/boos-list.component';
import { CreateBoosComponent } from './books/create-boos/create-boos.component';
import { DeleteBooksComponent } from './books/delete-books/delete-books.component';
import { UpdateBoosComponent } from './books/update-boos/update-boos.component';

const routes: Routes = [
  { path: '', component: BoosListComponent, pathMatch: 'full'},
  { path: 'create', component: CreateBoosComponent},
  { path: 'update/:id', component: UpdateBoosComponent},
  { path: 'show/:id', component: BoosDetailsComponent},
  { path: 'delete/:id', component: DeleteBooksComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
