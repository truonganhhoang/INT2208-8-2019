<div class="content">
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        } else{
            $tam = '';
        }
        if($tam == 'theloaisach'){
            include('theloaisach/them.php');
            include('theloaisach/lietke.php');
        } elseif($tam == 'chitietsach'){
            include('chitietsach/them.php');
            include('chitietsach/lietke.php');
        } elseif($tam == 'nguoidung'){
            include('nguoidung/lietke.php');
        } elseif($tam == 'donhang'){
            include('donhang/lietke.php');
        } elseif($tam == 'danhgia'){
            include('danhgia/lietke.php');
        }
    ?>
</div>