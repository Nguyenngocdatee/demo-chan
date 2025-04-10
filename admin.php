<!DOCTYPE html>
<html lang="en">
<style>
body {
  background-image: url('./nenthemnhanvien.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
        
     
}
</style>
<style>
         div#bigBox {width:auto; 
                     height:500px; 
                    
                     padding: 106px 192px 23px 123px;
                     }
   .app-main {
    width: 100%;
}

.sidebar {
    position: fixed;
    height: 100vh;
    width: 180px;
    padding: 10px 0px !important;
    font-weight: 700;
    border-radius: 0px 5px 5px 0px;
    z-index: 20;
}
nav ul {
    padding: 0 !important;
    list-style: none;
}

nav ul li {
    padding: 18px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: ease-in-out .2s all;
}

nav ul li a:hover {
    color: #d1d1d1;
}
        </style>   
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>

<body>

<nav class="sidebar bg-primary">
                <ul>
                    <li>
                        <a href="LOGIN.php"><i class="fa-solid fa-house ico-side"></i>ADMIN</a>
                    </li>
                    <li>
                        <a href="admin.php"><i class="fa-solid fa-cart-shopping ico-side"></i>DANH MỤC SP</a>
                    </li>
                    <li>
                        <a href="dsnv.php"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí NHÂN VIÊN</a>
                    </li>
                    <li>
                        <a href="dsdb.php"><i class="fa-solid fa-folder-open ico-side"></i>DANH SÁCH ĐẶT BÀN</a>
                    </li>
                    
                </ul>
            </nav>
    <!-- Main content -->
    <div class="container">
        <h1>CÁC MÓN ĂN moi</h1>

        <?php
        // Truy vấn databTa</th>
                    <th>SỬA</th>
                    <th>Xóa</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $rowtimkiem) : ?>
                    <tr>
                        <td><?php echo $rowtimkiem['rowNum']; ?></td>
                        <td><?php echo $rowtimkiem['ID']; ?></td>
                        <td><?php echo $rowtimkiem['tensanpham']; ?></td>
                        <td><?php echo $rowtimkiem['gia']; ?></td>
                        <td><img style="width: 80px; height: 80px;"src="images/<?php echo $rowtimkiem['anhmota'];?>"></td>

                       
                        <td>
                            <!-- Button Sửa -->
                            <a href="editSP.php?ID=<?php echo $rowtimkiem['ID']; ?>" id="btnUpdate" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                            </a>
                            </td>
                            <td>
                                 <!-- Button Xóa -->
                            <a href="deleteSP.php?ID=<?php echo $rowtimkiem['ID']; ?>" id="btnDelete" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            </a>
                            </td>
                           
                        
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
        <td ><a href="index.php"><h4 align="center">Thoát</h4></a></td>
    </div>

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>
