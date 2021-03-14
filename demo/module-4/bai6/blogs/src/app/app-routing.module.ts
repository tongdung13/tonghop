import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BlogDetailComponent } from './blogs/blog-detail/blog-detail.component';
import { BlogEditComponent } from './blogs/blog-edit/blog-edit.component';
import { BlogComponent } from './blogs/blog/blog.component';

const routes: Routes = [
  {
    path: 'blog',
    component: BlogComponent
}, {
    path: 'blog/:id',
    component: BlogDetailComponent
}, {
    path: 'blog/:id/edit',
    component: BlogEditComponent
}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
