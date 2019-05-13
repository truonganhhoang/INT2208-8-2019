<div class="container-fluid">
    <form action="modules/theloaisach/xuly.php" method="post" enctype="multipart/form-data">
        
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#sua<?php echo $dong['id_types'] ?>">Sửa</button>
            
        <div class="modal fade" id="sua<?php echo $dong['id_types'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sua">Sửa thể loại sách</h5> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="sua" class="col-form-label">Thể loại sách:</label>
                                <input type="text" class="form-control" id="theloaisach" name="theloaisach" value="<?php echo $dong['type'] ?>">
                                <input type="number" name="id" value="<?php echo $dong['id_types'] ?>" style="display: none">
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