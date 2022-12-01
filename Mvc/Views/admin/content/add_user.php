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
            <form action="/Home_admin/insert_user" method="POST">
                <h1>Đăng ký</h1>
                <div class="form-group">
                    <label >Username</label>
                    <div id=message_username></div>
                    <input type="text" name="username" id="username" class="form-control"   placeholder="Username...">
                </div>
                <div class="form-group">
                    <label >Email address</label>
                    <input type="email" name="email" id="email" class="form-control"   placeholder="Enter email...">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" id="password" class="form-control"  placeholder="Password...">
                </div>
                <div class="form-group">
                    <label >Fullname</label>
                    <input type="text" name="fullname" id="fullname" class="form-control"  placeholder="Fullname...">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input type="text" name="address" id="address" class="form-control"  placeholder="Address...">
                </div>
            
                <button type="submit" name="btnRegister" id="submit" class="btn btn-primary">Register</button>
            </form> 
            <?php
                if(isset($data["result"])){ 
                
                    if($data["result"]==true){?>
                        <h3 class="alert alert-success"> 
                        <?php echo "Đăng ký thành công"; ?>
                        </h3>
                     <?php    
                    }
                    else{ ?>
                        <h3 class="alert alert-warning"> 
                        <?php echo "Đăng ký thất bại"; ?>
                        </h3> 
            <?php }            
                    }?>
        </div>
    </div>
</div>

</div>
<script></script>
<!-- /.container-fluid -->