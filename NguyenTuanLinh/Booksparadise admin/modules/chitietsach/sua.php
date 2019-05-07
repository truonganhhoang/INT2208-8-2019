<div class="container-fluid">
    <form action="modules/chitietsach/xuly.php" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#sua<?php echo $dong['id_sach'] ?>" data-whatever="@mdo">Sửa</button>

        <div class="modal fade" id="sua<?php echo $dong['id_sach'] ?>" tabindex="-1" role="dialog" aria-labelledby="sua" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="them">Sửa chi tiết Sách</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="number" name="id" value="<?php echo $dong['id_sach'] ?>" style="display: none">
                                <label class="col-form-label">Tên sách:</label>
                                <input type="text" class="form-control" name="tensach" value="<?php echo $dong['tensach'] ?>">
                                <label class="col-form-label">Hình ảnh:</label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="hinhanh">
                                    </div>
                                    <div class="col-md-3">
                                        <img src="modules/chitietsach/uploads/<?php echo $dong['hinhanh'] ?>" width="30" height="auto">
                                    </div>
                                </div>
                                <label class="col-form-label">Tác giả:</label>
                                <input type="text" class="form-control" name="tacgia" value="<?php echo $dong['tacgia'] ?>">
                                <div class="row">
                                    <?php
                                        $sql_theloai = "select * from theloaisach";
                                        $run_theloai = mysqli_query($conn, $sql_theloai);
                                    ?>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Thể loại:</label>
                                        <select class="form-control" name="theloai">
                                            <?php
                                                while ($dong_theloai = mysqli_fetch_array($run_theloai)){
                                                    if ($dong['id_theloai'] == $dong_theloai['id_theloaisach']){
                                                ?>
                                                      <option selected="selected" value="<?php echo $dong_theloai['id_theloaisach'] ?>"><?php echo $dong_theloai['theloaisach'] ?></option>
                                              <?php 
                                                    } else{
                                              ?>
                                                      <option value="<?php echo $dong_theloai['id_theloaisach']?>"><?php echo $dong_theloai['theloaisach']?></option>
                                              <?php
                                                    }
                                                }
                                              ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Số trang:</label>
                                        <input type="number" class="form-control" name="sotrang" min="1" oninput="validity.valid||(value='');" value="<?php echo $dong['sotrang'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-form-label">Giá:</label>
                                        <input type="number" class="form-control" name="gia" min="0" oninput="validity.valid||(value='');" value="<?php echo $dong['gia'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Số lượng:</label>
                                        <input type="number" class="form-control" name="soluong" min="1" oninput="validity.valid||(value='');" value="<?php echo $dong['daban'] ?>">
                                    </div>
                                </div>
                                <label class="col-form-label">Mô tả:</label>
                                <textarea class="form-control" rows="3" name="mota"><?php echo $dong['mota'] ?>"</textarea>
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