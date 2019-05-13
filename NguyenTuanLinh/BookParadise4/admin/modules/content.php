<div class="content">
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        } else{
            $tam='';
        } if($tam == 'quanlytheloaisach'){
            include('quanlytheloaisach/main.php');
        } if($tam == 'quanlychitietsach'){
            include('quanlychitietsach/main.php');
        }
    ?> 
</div>
<div class="clear"></div>