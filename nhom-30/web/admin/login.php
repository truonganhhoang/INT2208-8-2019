<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BooksParadise Admin</title>
</head>

<body>
    <?php
        include('modules/config.php');
        session_start();
        if (isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "select * from admin where username='$username' and password='$password' LIMIT 1";
            $query = mysqli_query($conn, $sql);
            $nums = mysqli_num_rows($query);
            if ($nums > 0){
                $_SESSION['dangnhap'] = $username;
                header('location:index.php');
            } else{
                header('location:login.php');
            }
        }
    ?>
    <form class="login-box" action="" method="post">
        <h1>BooksParadise Admin</h1>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tài khoản" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
        </div>
        <input type="submit" class="btn btn-info" name="login" value="Đăng nhập">
    </form>
</body>
</html>