import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ProductListComponent } from './products/product-list/product-list.component';
import { CreateProductComponent } from './products/create-product/create-product.component';
import { EditProductComponent } from './products/edit-product/edit-product.component';

import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { ProductDetailsComponent } from './products/product-details/product-details.component';
import { NgxPaginationModule } from 'ngx-pagination';
import { Ng2SearchPipeModule } from 'ng2-search-filter';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { UserprofileComponent } from './components/userprofile/userprofile.component';
import { LogoutComponent } from './components/logout/logout.component';
import { PerfectScrollbarModule } from 'ngx-perfect-scrollbar';
import { LayoutComponent } from './layouts/layout/layout.component';
import { AppAsideModule, AppBreadcrumbModule, AppFooterModule, AppHeaderModule, AppSidebarModule } from '@coreui/angular';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import { TabsModule } from 'ngx-bootstrap/tabs';
import { IconModule, IconSetModule } from '@coreui/icons-angular';


@NgModule({
  declarations: [
    AppComponent,
    ProductListComponent,
    CreateProductComponent,
    EditProductComponent,
    ProductDetailsComponent,
    LoginComponent,
    RegisterComponent,
    UserprofileComponent,
    LogoutComponent,
    LayoutComponent

  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    AppRoutingModule,
    AppAsideModule,
    AppBreadcrumbModule.forRoot(),
    AppFooterModule,
    AppHeaderModule,
    AppSidebarModule,
    PerfectScrollbarModule,
    BsDropdownModule,
    TabsModule.forRoot(),
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule,
    NgxPaginationModule,
    Ng2SearchPipeModule,
    IconModule,
    IconSetModule.forRoot(),







  ],
  providers: [
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
