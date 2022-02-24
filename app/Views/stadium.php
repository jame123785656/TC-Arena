<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="./css/index.css" rel="stylesheet" />
    <title>TC Arena</title>
</head>

<style>
    .navbar {
        background-color: rgb(233, 233, 233);
    }

    .h3 {
        margin-left: 5%;
    }

    .head1 {
        margin-top: 10%;
    }

    .head1 h3 {
        margin-left: 5%;
    }

    .box {
        background-color: rgb(233, 233, 233);
        width: 90%;
        border: 1px;
        padding: 20%;
        margin-top: 3%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .box1 {
        background-color: rgb(233, 233, 233);
        width: 90%;
        height: 150px;
        border: 1px;
        padding: 20%;
        margin-top: 1%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .box1 img {
        width: 500px;
        height: 300px;
        margin: -35%;
        margin-top: -60%;
    }

    .box1 h4 {
        text-align: right;
        margin-top: -30%;
        margin-right: 10%;
    }

    .box1 h5 {
        text-align: left;
        margin-left: 60%;
    }

    .box1 button {
        background-color: #669999;
        width: 30%;
        border-radius: 0%;
        margin-left: 85%;
        margin-top: 10%;
        position: static;
    }

    .box2 {
        background-color: rgb(233, 233, 233);
        width: 90%;
        border: 1px;
        padding: 20%;
        margin-top: 3%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .box2 img {
        width: 500px;
        height: 300px;
        margin: -35%;
        margin-top: -60%;
    }

    .box2 h5 {
        text-align: left;
        margin-left: 60%;
    }

    .box2 h4 {
        text-align: right;
        margin-top: -30%;
        margin-right: 10%;
    }

    .box2 button {
        background-color: #669999;
        border-radius: 75%;
        margin-left: 85%;
        margin-top: 10%;
        position: static;
    }

    .box3 {
        background-color: rgb(233, 233, 233);
        width: 90%;
        border: 1px;
        padding: 20%;
        margin-top: 3%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .box3 img {
        width: 500px;
        height: 300px;
        margin: -35%;
        margin-top: -60%;
    }

    .box3 h4 {
        text-align: right;
        margin-top: -30%;
        margin-right: 10%;
    }

    .box3 h5 {
        text-align: left;
        margin-left: 60%;
    }

    .box3 button {
        background-color: #669999;
        border-radius: 75%;
        margin-left: 85%;
        margin-top: 10%;
        position: static;
    }

    .box4 {
        background-color: rgb(233, 233, 233);
        width: 90%;
        border: 1px;
        padding: 20%;
        margin-top: 3%;
        margin-left: 5%;
        margin-right: 5%;
    }

    .box4 img {
        width: 500px;
        height: 300px;
        margin: -35%;
        margin-top: -60%;
    }

    .box4 h4 {
        text-align: right;
        margin-top: -30%;
        margin-right: 10%;
    }

    .box4 h5 {
        text-align: left;
        margin-left: 60%;
    }

    .box4 button {
        background-color: #669999;
        border-radius: 75%;
        margin-left: 85%;
        margin-top: 10%;
        position: static;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-drak fixed-top">
        <a class="navbar-brand" href="/index">
            <img src="https://media.discordapp.net/attachments/815239501571424278/925032242160480306/1640615257104.png?width=483&height=662" height="60" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/user" style="color: black;">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">จองสนาม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/viewuser" style="color: black;">รีวิวสนาม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">ประวัติการจอง</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
        <h5 style="color:black"class="mr-2"><br></user:br><?php echo  $session->get('username'); ?>
    <a class="btn btn-danger " href="/logout">ออกจากระบบ</a>
    </nav>
    <-----------navbar------------->
        <div class="head1">
            <center>
                <h1>จองสนาม</h1>
            </center>
            <br><br>
            <h3>สนามขนาดเล็ก</h3>
        </div>
        <div class="box1">
            <img src="https://media.discordapp.net/attachments/922495064477925456/928291645982646272/62133297_610368266150541_8651221284232888320_n.png?width=901&height=676">
            <h4>รายละเอียดสนาม A</h4>
            <h5>ขนาด 22*42 เมตร <br> รองรับผู้เล่นได้มากสุด 10 คน <br>
                อัตราค่าบริการชั่วโมงละ 400 บาท <br>
                ฟรี ไฟสปอร์ตไลท์/น้ำเปล่าขนาด 500 ml. 1 แพ็ค <br>
            </h5>
            <button>จองสนาม</button>
        </div>
        <div class="box2">
            <img src="https://media.discordapp.net/attachments/922495064477925456/928290931713663016/62599799_615702035617164_4057636521438609408_n.png?width=676&height=676">
            <h4>รายละเอียดสนาม B</h4>
            <h5>ขนาด 22*42 เมตร <br> รองรับผู้เล่นได้มากสุด 10 คน <br>
                อัตราค่าบริการชั่วโมงละ 400 บาท <br>
                ฟรี ไฟสปอร์ตไลท์/น้ำเปล่าขนาด 500 ml. 1 แพ็ค <br>
            </h5>
            <button>จองสนาม</button>
        </div>
        <br>
        <h3 class="h3">สนามขนาดใหญ่</h3>
        <div class="box3">
            <img src="https://media.discordapp.net/attachments/922495064477925456/928291645982646272/62133297_610368266150541_8651221284232888320_n.png?width=901&height=676">
            <h4>รายละเอียดสนาม C</h4>
            <h5>ขนาด 30*48 เมตร <br> รองรับผู้เล่นได้มากสุด 12 คน <br>
                อัตราค่าบริการชั่วโมงละ 800 บาท <br>
                ฟรี ไฟสปอร์ตไลท์/น้ำเปล่าขนาด 500 ml. 1 แพ็ค <br>
            </h5>
            <button>จองสนาม</button>
        </div>
        <div class="box4">
            <img src="https://media.discordapp.net/attachments/922495064477925456/928290931713663016/62599799_615702035617164_4057636521438609408_n.png?width=676&height=676">
            <h4>รายละเอียดสนาม D</h4>
            <h5>ขนาด 30*48 เมตร <br> รองรับผู้เล่นได้มากสุด 12 คน <br>
                อัตราค่าบริการชั่วโมงละ 800 บาท <br>
                ฟรี ไฟสปอร์ตไลท์/น้ำเปล่าขนาด 500 ml. 1 แพ็ค <br>
            </h5>
            <button>จองสนาม</button>
        </div>

        <br><br><br><br>
        <footer>
            <center>
                <div class="footer-basic">
                    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a target="_blank" href="https://www.facebook.com/%E0%B8%AA%E0%B8%99%E0%B8%B2%E0%B8%A1%E0%B8%9F%E0%B8%B8%E0%B8%95%E0%B8%9A%E0%B8%AD%E0%B8%A5%E0%B8%AB%E0%B8%8D%E0%B9%89%E0%B8%B2%E0%B9%80%E0%B8%97%E0%B8%B5%E0%B8%A2%E0%B8%A1-TC-ARENA-303073660213338/">
                            <i class="icon ion-social-facebook"></i></a>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">หน้าหลัก</a></li>
                        <li class="list-inline-item"><a href="#">ติดต่อเรา </a></li>
                        <li class="list-inline-item"><a href="#">โทร.094-789-1526</a></li>
                        <li class="list-inline-item"><a href="#">เงื่อนไข</a></li>
                        <li class="list-inline-item"><a href="#">นโยบายส่วนตัว</a></li>
                    </ul>
        </footer>
        </center>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>