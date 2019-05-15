<header>
        <nav class="menu1 navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="image/logo1.png" style="width: 60px; height: auto">
                </a>
                <a class="navbar-brand" href="index.php">BooksParadise</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li>
                            <form class="form-inline my-2 my-lg-0">
                                  <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ tìm kiếm" aria-label="Search">
                                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Cá nhân</a>
                                <a class="dropdown-item" href="#">Đăng nhập</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="menu2 navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="navbar-nav mr-auto">
                    <ul class="nav">
                        <li class="nav-item active"> <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Trang chủ<span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i>Thể loại</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php
                                $sql_kinds = "select * from theloaisach order by id_theloaisach asc";
                                $run_kinds = mysqli_query($conn, $sql_kinds);
                                while ($dong_kinds = mysqli_fetch_array($run_kinds)){
                              ?>
                                <a class="dropdown-item" href="bookgroup.php?kind=<?php echo $dong_kinds['id_theloaisach'] ?>"><?php echo $dong_kinds['theloaisach'] ?></a>
                              <?php
                                }
                              ?>
                            </div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-star"></i>Mới</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i class="fab fa-hotjar"></i>Bán chạy</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-coins"></i>Giảm giá</a> </li>
                    </ul>
                </div>
                <div class="navbar-nav ml-lg-auto"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a></div>
            </div>
        </nav>
    </header>