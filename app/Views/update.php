<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/editprofile.css" rel="stylesheet" type="text/css" />
    <title>แก้ไขข้อมูลส่วนตัว</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: linear-gradient(45deg, #F8FCF9, #205222);
    }

    .areaBox {
        width: 60%;
        margin-left: 20%;
        margin-top: 5%;
        margin-bottom: 4%;
        border-radius: 8%;
        background-color: white;
        display: flex;
        background-image: url(/image/backgroundArena.png);
    }

    .boxLeft {
        margin-left: 10%;
        height: 608px;
        width: 35%;
    }

    .tableName {
        width: 100%;

    }

    .tableN {
        display: flex;
    }

    .tableName input {
        width: 75%;
        height: 30px;
        border: 1.5px solid rgb(81, 87, 81);
        border-radius: 15px;
        padding-left: 10px;
        font-size: 15px;
        margin-top: -3%;
    }

    .tableName p {
        color: #8d8f8f;
        font-size: 16px;
    }

    .btnprofile {
        width: 85%;
        height: 6%;
        margin-left: 5%;
        border: 1.5px solid rgb(185, 192, 185);
        border-radius: 15px;
        padding-left: 10px;
        font-size: 15px;
        margin-top: 28%;
        color: white;
        background-color: #517072;
        transition: .4s;
    }

    .btnprofile:hover {
        background: #425c5e;
    }

    .editprofile {
        width: 60%;
        height: 32px;
        margin-left: 20%;
        margin-top: 6%;
        border: 1px solid #b6b9b9;
        border-radius: 20px;
        background-color: white;
        transition: .4s;
    }

    .editprofile:hover {
        background-color: #f0f5f5;
    }

    .btnback {
        width: 85%;
        height: 6%;
        margin-top: 37.5%;
        margin-left: 7%;
        border: 1.5px solid rgb(102, 110, 102);
        border-radius: 15px;
        padding-left: 10px;
        font-size: 15px;
        color: white;
        background-color: #8d8f8f;
        transition: .4s;
    }

    .btnback:hover {
        background: #7a7a7a;
    }

    .boxRight {
        margin-left: 10%;
        width: 35%;
    }

    .boxRight img {
        width: 80%;
        margin-left: 10%;
        margin-top: 33%;
        border-radius: 160px;
    }
</style>

<body>
    <?php $ID = $session->get('ID'); ?>
    <form action="<?= base_url('/Update/update/' . $ID) ?>" method="post" enctype="multipart/form-data">
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

    </form>

    </div>
    </div>
    </div>
</body>

</html>