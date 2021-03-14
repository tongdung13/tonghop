import { Injectable } from '@angular/core';
import { from } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class BoosService {

  private baseUrl = 'http://localhost:3000/books';
  constructor(private http: HttpClient) { }

  getAll()
  {
    return this.http.get(`${this.baseUrl}`);
  }

  addBooks(data: any)
  {
    return this.http.post(`${this.baseUrl}`, data);
  }

  showBooks(id: number)
  {
    return this.http.get(`${this.baseUrl}/${id}`);
  }

  editBooks(id: number, data: any)
  {
    return this.http.put(`${this.baseUrl}/${id}`, data);
  }

  deleteBooks(id: number)
  {
    return this.http.delete(`${this.baseUrl}/${id}`);
  }

}
