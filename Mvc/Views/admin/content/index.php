<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên đăng nhập</th>
                        <th>Địa chỉ email</th>
                        <th>password</th>
                        <th>Họ và tên</th>
                        <th>Địa chỉ</th>
                        <th>Vai trò</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                        while($row=mysqli_fetch_array($data['user'])){ ?>
                             <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $row['username'];  ?></td>
                                <td><?php echo $row['email'];  ?></td>
                                <td><?php echo $row['password'];  ?></td>
                                <td><?php echo $row['fullname'];  ?></td>
                                <td><?php echo $row['address'];  ?></td>
                                <td><?php echo $row['level'];  ?></td>
                                <td><a href="/Home_admin/delete_user/ <?php echo $row['id']  ?>" class="btn btn-primary">Delete</a></td>
                                <td><a href="/Home_admin/edit_user/ <?php echo $row['id']  ?>" class="btn btn-primary">Edit</a></td>                               
                            </tr>
                      <?php 
                      $i++;}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->