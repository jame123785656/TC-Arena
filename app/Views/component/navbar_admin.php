<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body>

    <!-- navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="/image/image1.png" alt="">
        </div>
        <div class="menu-section">
            <a href="/index_admin">
                <p>หน้าหลัก</p>
            </a>
            <a href="">
                <p>จัดการสนาม</p>
            </a>
            <a href="">
                <p>จัดการการจองสนาม</p>
            </a>
            <a href="/manageuser">
                <p>จัดการข้อมูลลูกค้า</p>
            </a>
            <a href="">
                <p>จัดการการชำระเงิน</p>
            </a>
        </div>
        <div class="showuser">
            <a href="/profile" class="imguser"><img src="/img/<?php echo $session->get('image') ?>" alt=""></a>
            <p><?php echo  $session->get('username'); ?></p>
            <a href="/logout"  class="logout">
                <p>ออกจากระบบ</p>
            </a>
        </div>
    </div>
    <!-- End navbar      -->

    
</body>
</html>