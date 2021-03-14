<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="margin-left: 30%">Danh Sach Mat Hang</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
        <form action="" method="POST">
            Nhap ten hang: 
            <input type="search" placeholder="search">
            <input type="submit" value="Tim Kiem" class="btn btn-sm btn-outline-success">
        </form>
        </div>
        <div class="col-6">
        <a href="?page=add" class="btn btn-sm btn-outline-success" style="margin-left: 463px;">Them Moi</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product('name') ?></td>
                <td><?php echo $product('category') ?></td>
                <td>
                    <a href="" class="btn btn-sm btn-outline-primary">Update</a>
                    <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>