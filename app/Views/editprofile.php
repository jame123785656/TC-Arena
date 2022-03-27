<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/editprofile.css'); ?>" >
    <title>แก้ไขข้อมูลส่วนตัว</title>
</head>

<body>
    <?php $ID = $session->get('ID'); ?>
    <form action="<?= base_url('/Editprofile/editprofile/' . $ID) ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo  $user['ID']; ?>">
        <div class="areaBackground">
            <div class="areaBox">
                <div class="boxLeft">
                    <h1 class="profileText">แก้ไขข้อมูลส่วนตัว</h1>
                    <div class="tableName">
                        <h4 for="inputname">ชื่อ-นามสกุล</h4>
                        <input type="text" name="name" placeholder="กรุณาใส่ชื่อ-นามสกุล" id="inputforname" required="" value="<?php echo $session->get('name'); ?>">
                        <h4 for="inputusername">ชื่อผู้ใช้</h4>
                        <input type="text" name="username" placeholder="กรุณาใส่ชื่อผู้ใช้" id="inputforusername" value="<?php echo $session->get('username'); ?>">
                        <h4 for="inputphone">เบอร์โทรศัพท์</h4>
                        <input type="text" name="phone" placeholder="กรุณาใส่เบอร์โทรศัพท์" id="inputforphone" value="<?php echo $session->get('phone'); ?>">
                        <h4 for="inputEmail">อีเมล์</h4>
                        <input type="Email" name="Email" placeholder="กรุณาใส่อีเมล์" id="inputforEmail" value="<?php echo $session->get('Email'); ?>">

                    </div>
                    <button type="submit" class="btnprofile">ยืนยันการแก้ไขข้อมูล</button>

                </div>

                <div class="boxRight">
                    <img src="/img/<?php echo $session->get('image') ?>" alt="">
                    <input type="file" name="image"  accept="img/*">
                    <input type="hidden" name="old_image" value="<?php echo  $session->get('image') ?>">
                    <a href="/profile"><button type="button" class="btnback">ย้อนกลับ</button></a>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>