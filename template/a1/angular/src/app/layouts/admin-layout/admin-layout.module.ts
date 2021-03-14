import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AdminLayoutRoutes } from './admin-layout.routing';
import {MatButtonModule} from '@angular/material/button';
import {MatInputModule} from '@angular/material/input';
import {MatRippleModule} from '@angular/material/core';
import {MatFormFieldModule} from '@angular/material/form-field';
import {MatTooltipModule} from '@angular/material/tooltip';
import {MatSelectModule} from '@angular/material/select';
import { ProductListComponent } from 'app/products/product-list/product-list.component';
import { CreateProductComponent } from 'app/products/create-product/create-product.component';
import { EditProductComponent } from 'app/products/edit-product/edit-product.component';
import { ProductDetailsComponent } from 'app/products/product-details/product-details.component';
import { Ng2SearchPipeModule } from 'ng2-search-filter';
import { NgxPaginationModule } from 'ngx-pagination';
import { AngularFireStorageModule } from '@angular/fire/storage';
import { environment } from 'environments/environment';
import { AngularFireModule } from '@angular/fire';
import { Ng2OrderModule } from 'ng2-order-pipe';
@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(AdminLayoutRoutes),
    FormsModule,
    ReactiveFormsModule,
    MatButtonModule,
    MatRippleModule,
    MatFormFieldModule,
    MatInputModule,
    MatSelectModule,
    MatTooltipModule,
    ReactiveFormsModule,
    Ng2SearchPipeModule,
    NgxPaginationModule,
    AngularFireStorageModule,
    AngularFireModule.initializeApp(environment.firebaseConfig, 'cloud'),
    Ng2OrderModule
  ],
  declarations: [
    ProductListComponent,
    CreateProductComponent,
    EditProductComponent,
    ProductDetailsComponent
  ]
})

export class AdminLayoutModule {}
