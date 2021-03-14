import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { LayoutComponent } from './layouts/layout/layout.component';
import { CreateProductComponent } from './products/create-product/create-product.component';
import { EditProductComponent } from './products/edit-product/edit-product.component';
import { ProductListComponent } from './products/product-list/product-list.component';

const routes: Routes = [
  { path: '', redirectTo: '/login', pathMatch: 'full'},
  { path: 'create', component: CreateProductComponent},
  { path: 'edit/:id', component: EditProductComponent},
  { path: 'product', component: ProductListComponent},
  { path: 'register', component: RegisterComponent},
  { path: 'login', component: LoginComponent},
  { path: 'layout', component: LayoutComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
