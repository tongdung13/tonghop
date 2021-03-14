
    <div class="container">
        <div class="card">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Dob</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $key => $customer): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $customer['name'] ?></td>
                            <td><?php echo $customer['dob'] ?></td>
                            <td>
                                <img src="images/<?php echo $customer['image'] ?>" style="width: 100px;">
                            </td>
                            <td>
                                <a href="" class="btn btn-outline-primary">Update</a>
                                <a href="?page=delete&id=<?php echo $customer['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('ban co muon xoa khong?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>