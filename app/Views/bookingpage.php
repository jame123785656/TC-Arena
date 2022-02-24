<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/bookingpage.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_admin.css'); ?>" >
    <title>จองสนาม</title>
</head>
<body>
    
<?php require('component/navbar.php') ?>


        <p class="big-section">จองสนาม</p>


        <div class="box-card">
<?php if ($field) : ?>
    <?php foreach ($field as $field) : ?>
            <p><?php echo $field['Type']?></p>
            <div class="card">
                <div class="show-imgA">
                    <img src="/img/<?php echo $field['f_image'] ?>">
                        <div class="img-smallA">
                            <img src="/img/<?php echo $field['f_image'] ?> ">
                            <img src="/img/<?php echo $field['f_image'] ?> ">
                            <img src="/img/<?php echo $field['f_image'] ?> ">
                            <img src="/img/<?php echo $field['f_image'] ?> ">
                        </div>
                </div>
                <div class="detailsA">
                    <h2><?php echo $field['Name']; ?></h2><hr>
                    <p>- ขนาด 22*42 เมตร</p>
                    <p>- รองรับผู้เล่นได้<?php echo $field['person']; ?> คน</p>
                    <p>- อัตราค่าบริการ ชั่วโมงละ <?php echo $field['Price']; ?> บาท</p>
                    <p>- ฟรีน้ำเปล่าขนาด<?php echo $field['Promotion']; ?></p>
                    
                    <button type="button" class="btn-reserve" onclick="openForm()">จองสนาม</button>
    
                </div>
            </div>
    <?php endforeach; ?>
<?php endif; ?>
        </div>



        
    <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <div class="text-header">
                <h3>จองสนามฟุตซอล</h3>
                <a href="./bookingpage"><img src="/image/cross.png" alt=""></a>
            </div>
            <hr>
            <div class="form-time">
                <p>วันที่จอง</p>
                <input type="text" placeholder="04/03/2544">
                <p>เวลาที่ต้องการจอง</p>
                <input type="text" placeholder="00.00 - 00.00 น.">
                <button class="btnform" type="submit">จองสนาม</button>
            </div>
        </form>
    </div>


        <script>
            function openForm(){
                document.getElementById("myForm").style.display = "block";
            }
            function close(){
                document.getElementById("myForm").style.display = "none";
            }
        </script>

    
</body>
</html>