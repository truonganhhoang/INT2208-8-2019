<div class="container-fluid">
    <form action="modules/theloaisach/xuly.php" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#them" data-whatever="@mdo">Thêm</button>

        <div class="modal fade" id="them" tabindex="-1" role="dialog" aria-labelledby="them" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="them">Thêm thể loại sách</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="them" class="col-form-label">Thể loại sách:</label>
                                <input type="text" class="form-control" id="theloaisach" name="theloaisach">
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