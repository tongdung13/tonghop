import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ImageService {

  protected baseUrl = "http://localhost/api/products";

  constructor(private http: HttpClient) { }

  public uploadImage(image: File): Observable<any> {
    const formData = new FormData();
    formData.append('image', image);
    return this.http.post('api/vi/image-upload', formData);
  }
}
