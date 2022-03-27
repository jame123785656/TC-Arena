<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/register.css'); ?>" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>สมัครสมาชิก</title>
    
</head>
<body>

    <form action="/register/save" id method="post">
        <div class="areaBackground">
            <div class="areaBox">
                <div class="boxLeft">
                    <h2 class="registerText">สมัครสมาชิก</h2>
                    <div class="tableName">
                        <p for="inputname">ชื่อ-นามสกุล*</p>
                        <input type="text" name="name" placeholder="กรุณาใส่ชื่อ-นามสกุล" id="inputforname" required="" value="<?= set_value('name'); ?>">
                        <p for="inputusername">ชื่อผู้ใช้*</p>
                        <input type="text" name="username" placeholder="กรุณาใส่ชื่อผู้ใช้" id="inputforusername" required="" value="<?= set_value('username'); ?>">
                        <p for="inputphone">เบอร์โทรศัพท์*</p>
                        <input type="text" name="phone" placeholder="กรุณาใส่เบอร์โทรศัพท์" id="inputforphone" required="" value="<?= set_value('phone'); ?>">
                        <p for="inputEmail">อีเมล์*</p>
                        <input type="Email" name="Email" placeholder="กรุณาใส่อีเมล์" id="inputforEmail" required="" value="<?= set_value('Email'); ?>">
                        <p for="inputpassword">รหัสผ่าน*</p>
                        <input type="password" name="password" placeholder="กรุณาใส่รหัสผ่าน" required="" id="inputforpassword">
                        <p for="inputagainpassword">ยืนยันรหัสผ่าน*</p>
                        <input type="password" name="againpassword" placeholder="ยืนยันรหัสผ่าน" required="" id="inputforagainpassword">
                    </div>
                    <button  type="submit"  class="btnRegister">สมัครสมาชิก</button></a>

                </div>
                <div class="boxRight">
                    <div class="rightStart">
                        <?php if (isset($validation)) : ?>
                            <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="rightEnd">
                        <img src="/image/image1.png" alt="">
                        <a href="/login"><button type="button" class="btnback">ย้อนกลับ</button></a>
                    </div>
    </form>
                </div>
            </div>
        </div>
</body>
</html>