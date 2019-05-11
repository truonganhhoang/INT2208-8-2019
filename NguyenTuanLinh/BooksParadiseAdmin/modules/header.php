<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><strong>BooksParadise Admin</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php if($_GET['quanly'] == 'chitietsach'){ echo 'active'; } ?>">
                <a class="nav-link" href="index.php?quanly=chitietsach">Sách</a>
              </li>
              <li class="nav-item <?php if($_GET['quanly'] == 'theloaisach'){ echo 'active'; } ?>">
                <a class="nav-link" href="index.php?quanly=theloaisach">Thể loại</a>
              </li>
              <li class="nav-item <?php if($_GET['quanly'] == 'nguoidung'){ echo 'active'; } ?>">
                <a class="nav-link" href="index.php?quanly=nguoidung">Người Dùng</a>
              </li>
              <li class="nav-item <?php if($_GET['quanly'] == 'donhang'){ echo 'active'; } ?>">
                <a class="nav-link" href="index.php?quanly=donhang">Đơn Hàng</a>
              </li>
              <li class="nav-item <?php if($_GET['quanly'] == 'danhgia'){ echo 'active'; } ?>">
                <a class="nav-link" href="index.php?quanly=danhgia">Đánh giá</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-lg-auto">
                <form class="form-inline my-2 my-lg-0" style="margin-right: 10px">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ tìm kiếm..." aria-label="Search">
                    <button class="btn btn btn-info my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
                <form action="" method="post">
                    <input type="submit" class="btn btn-info" value="Thoát" name="out">
                </form>
            </ul>
        </div>
    </nav>
</header>
<?php
    if (isset($_POST['out'])){
        session_destroy();
        header('location:index.php');
    }
?>