<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Document</title>
</head>
<body>
   <!-- navbar -->
   <div class="navbar">
            <div class="logo">
                <img src="/image/image1.png" alt="">
            </div>
            <div class="menu-section">
                <a href="/user"><p>หน้าหลัก</p></a>
                <a href="/bookingpage"><p>จองสนาม</p></a>
                <a href="/viewuser"><p>รีวิวสนาม</p></a>
                <a href=""><p>ประวัติการจอง</p></a>
                <a href=""><p>ติดต่อเรา</p></a>
            </div>
            <div class="showuser">
                <a href="/profile" class="imguser"><img src="/img/<?php echo $session->get('image') ?>" alt=""></a>
               <p><?php echo  $session->get('username'); ?></p>
                <a href="/logout"  class="logout"><p>ออกจากระบบ</p></a>
            </div>
        </div>
    <!-- End navbar      -->
    
</body>
</html>

  