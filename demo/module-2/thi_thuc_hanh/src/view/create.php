<div class="container">
    <div class="card">
        <div class="card-header">
            Them Mat hang
        </div>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                Ma hang: 
                    <input type="text" name="productCode" class="form-control" required />
                </div>
                <div class="form-group">
                Ten hang: 
                    <input type="text" name="name" class="form-control" required />
                </div>
                <div class="form-group">
                Loai hang: 
                    <select  name="category" class="form-control">
                        <option value="dien thoai">Dien Thoai</option>
                        <option value="Tu Lanh">Tu Lanh</option>
                    </select>
                </div>
                <div class="form-group">
                Gia hang: 
                    <input type="number" name="price" class="form-control" required />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                So luong: 
                    <input type="number" name="amount" class="form-control" required />
                </div>
                <div class="form-group">
                Ngay Tao: 
                    <input type="date" name="date" class="form-control" required />
                </div>
                <div class="form-group">
                Mo ta: 
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        </div><br>
        <button type="submit" class="btn btn-sm btn-outline-primary">Add</button>
    </form>
</div>