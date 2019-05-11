<div class="container-fluid">
    <form action="modules/chitietsach/xuly.php" method="post" enctype="multipart/form-data">
        
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#xoa<?php echo $dong['id'] ?>">Xóa</button>
            
        <div class="modal fade" id="xoa<?php echo $dong['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sua">Xác nhận</h5> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <p>Bạn có chắc muốn xóa cuốn sách này?</p>
                                <input type="number" name="id" value="<?php echo $dong['id'] ?>" style="display: none">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <input type="submit" class="btn btn-danger" id="xoa" name="xoa" value="Xóa">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>