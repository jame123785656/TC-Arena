<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/profile.css" rel="stylesheet" type="text/css" />
    <title>โปรไฟล์</title>
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
        margin-top: 10%;

    }

    .tableN {
        display: flex;
    }

    .profileText {
        margin-top: 20%;
    }

    .tableName input {
        width: 80%;
        height: 35px;
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
        margin-top: 22%;
        color: white;
        background-color: #517072;
        transition: .4s;
    }

    .btnprofile:hover {
        background: #425c5e;
    }

    .addprofile {
        width: 60%;
        height: 32px;
        margin-left: 20%;
        margin-top: 6%;
        border: 1px solid #b6b9b9;
        border-radius: 20px;
        background-color: white;
    }

    .btnback {
        width: 85%;
        height: 6%;
        margin-top: 24%;
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
        width: 100%;
        margin-left: 10%;
        margin-top: 33%;
        border-radius: 50%
    }
</style>

<body>
    

    <div class="areaBackground">
        <div class="areaBox">
            <div class="boxLeft">
                <h1 class="profileText">ข้อมูลส่วนตัว</h1>
                <div class="tableName">
                    <h3>ชื่อ-นามสกุล</h3>
                    <?php echo  $session->get('name'); ?>
                    <h3>ชื่อผู้ใช้</h3>

                    <?php echo  $session->get('username'); ?>
                    <h3>เบอร์โทรศัพท์</h3>
                    <?php echo  $session->get('phone'); ?>
                    <h3>อีเมล์</h3>
                    <?php echo  $session->get('Email'); ?>
                </div>
                <?php $ID = $session->get('ID'); ?>
                <a href="<?php echo base_url('/update/'.$ID) ?>" id="text"><button type="button" class="btnprofile">แก้ไขข้อมูลส่วนตัว</button></a>

            </div>
            <div class="boxRight">
            <img src="/img/<?php echo $session->get('image') ?>"   alt="">
                <a href="/user"><button type="button" class="btnback">ย้อนกลับ</button></a>
            </div>
        </div>
    </div>
</body>

</html>