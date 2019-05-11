<div class="container-fluid">
    <form action="modules/chitietsach/xuly.php" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#them" data-whatever="@mdo">Thêm</button>

        <div class="modal fade" id="them" tabindex="-1" role="dialog" aria-labelledby="them" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="them">Thêm chi tiết Sách</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="col-form-label">Tên sách:</label>
                                <input type="text" class="form-control" name="tensach">
                                <label class="col-form-label">Hình ảnh:</label>
                                <input type="file" class="form-control-file" name="hinhanh">
                                <label class="col-form-label">Tác giả:</label>
                                <input type="text" class="form-control" name="tacgia">
                                <div class="row">
                                    <?php
                                        $sql = "select * from types";
                                        $run = mysqli_query($conn, $sql);
                                    ?>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Thể loại:</label>
                                        <select class="form-control" name="theloai">
                                            <?php
                                                while ($dong = mysqli_fetch_array($run)){
                                            ?>
                                              <option value="<?php echo $dong['type'] ?>"><?php echo $dong['type'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Số trang:</label>
                                        <input type="number" class="form-control" name="sotrang" min="1" oninput="validity.valid||(value='');">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Giá:</label>
                                        <input type="number" class="form-control" name="gia" min="0" oninput="validity.valid||(value='');">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Số lượng:</label>
                                        <input type="number" class="form-control" name="soluong" min="1" oninput="validity.valid||(value='');">
                                    </div>
                                </div>
                                <label class="col-form-label">Mô tả:</label>
                                <textarea class="form-control" rows="3" name="mota"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <input type="submit" class="btn btn-primary" id="them" name="them" value="Thêm">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>