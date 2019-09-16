<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Danh sách nhân viên </h1>

            <div style="margin: 30px 0">
                <a href="index.php?controller=post&action=create" class="btn btn-primary">thêm nhân viên mới</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 if(mysqli_num_rows($result)>0){
                     while ($row = mysqli_fetch_row($result)){
                         ?>
                       <tr>
                           <th scope="row"><?php echo $row["id"]?></th>
                           <th scope="row"><?php echo $row["name"]?></th>
                           <th scope="row"><?php echo $row["address"]?></th>
                           <th scope="row"><?php echo $row["salary"]?></th>
                           <th>
                               <div>
                                   <a class="btn btn-warning" href="index.php?controller=post&action=edit&id=<?php echo $row['id'] ?>">Sửa nhân viên</a>
                               </div>
                               <div>
                                   <a class="btn btn-danger" href="index.php?controller=post&action=delete&id=<?php echo $row['id'] ?>">Xóa nhân viên</a>
                               </div>
                           </th>
                       </tr>
                     <?php
                     }
                 }else{
                     echo"<br> Không có bản ghi nào trong CSDL";
                 }?>

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>