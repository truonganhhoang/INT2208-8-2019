<meta charset="utf-8">
<div class="left">
    <?php
        if (isset($_GET['ac'])){
            $tam = $_GET['ac'];
        }else{
            $tam = '';
        }if ($tam == 'them'){
            include('them.php');
        }if ($tam == 'sua'){
            include('sua.php');
        }
    ?>
</div>
<div class="right">
    <?php
        include('lietke.php');
    ?>
</div>