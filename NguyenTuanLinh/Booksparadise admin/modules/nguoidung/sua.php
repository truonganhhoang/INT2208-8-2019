<div class="container-fluid">
    <form action="modules/nguoidung/xuly.php" method="post" enctype="multipart/form-data">
        
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#sua<?php echo $dong['id_user'] ?>">Sửa</button>
            
        <div class="modal fade" id="sua<?php echo $dong['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sua">Sửa thông tin người dùng</h5> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="sua" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $dong['user_name'] ?>">
                                <label for="sua" class="col-form-label">Password:</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $dong['user_password'] ?>">
                                <label for="sua" class="col-form-label">Fullname:</label>
                                <input type="text" class="form-control" name="fullname" value="<?php echo $dong['fullname'] ?>">
                                <input type="number" name="id" value="<?php echo $dong['id_user'] ?>" style="display: none">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <input type="submit" class="btn btn-success" id="sua" name="sua" value="Sửa">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>