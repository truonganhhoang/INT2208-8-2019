<?php
    $sql = "select * from users order by id_user desc";
    $run = mysqli_query($conn, $sql);
?>
<div class="lietke">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Fullname</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $i = 1;
                  while ($dong = mysqli_fetch_array($run)){
                ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $dong['user_name'] ?></td>
                  <td><?php echo $dong['user_password'] ?></td>
                  <td><?php echo $dong['fullname'] ?></td>
                  <td><?php include('sua.php') ?></td>
                  <td><?php include('xoa.php') ?></td>
                </tr>
                <?php
                    $i = $i +1;
                  }
                ?>
            </tbody>
        </table>
    </div>
</div>