<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_Admin.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/employee.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/pay_admin.css'); ?>" >
    <title>จัดการการจองสนาม</title>
</head>
<body>

<?php require('component/navbar_admin.php') ?>

    <h4>จัดการชำระเงิน</h4>
        <div class="row">
            <div class="from-pay">
                <div class="detailsPay">
                    <div class="detailsLeft">
                        <img src="/image/img.png" alt="">
                    </div>
                    <div class="detailsRight">
                        <h3>สนาม A (ขนาดเล็ก)</h3><hr>
                        <p>- วันที่ 04/03/2022</p>
                        <p>- เวลา 09.00-10.00</p>
                        <p>- เวลา 10.00-11.00</p>
                        <p>- 2 ชั่วโมง ราคา 800 บาท</p>
                        <button class="btnCf-pay" type="submit" >ยืนยัน</button>
                        <a href="/index_admin"><button class="btnCancel-pay" type="button">ยกเลิก</button></a>
                    </div>
                </div>
            </div>

            <div class="from-pay">
                <div class="detailsPay">
                        <div class="detailsLeft">
                            <img src="/image/img.png" alt="">
                        </div>
                        <div class="detailsRight">
                            <h3>สนาม B (ขนาดเล็ก)</h3><hr>
                            <p>- วันที่ 05/03/2022</p>
                            <p>- เวลา 11.00-12.00</p>
                            <p>- เวลา 12.00-13.00</p>
                            <p>- 2 ชั่วโมง ราคา 800 บาท</p>
                            <button class="btnCf-pay" type="submit" >ยืนยัน</button>
                        <a href="/index_admin"><button class="btnCancel-pay" type="button">ยกเลิก</button></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="from-pay">
                <div class="detailsPay">
                    <div class="detailsLeft">
                        <img src="/image/img.png" alt="">
                    </div>
                    <div class="detailsRight">
                        <h3>สนาม A (ขนาดเล็ก)</h3><hr>
                        <p>- วันที่ 06/03/2022</p>
                        <p>- เวลา 09.00-10.00</p>
                        <p>- เวลา 10.00-11.00</p>
                        <p>- 2 ชั่วโมง ราคา 800 บาท</p>
                        <button class="btnCf-pay" type="submit" >ยืนยัน</button>
                        <a href="/index_admin"><button class="btnCancel-pay" type="button">ยกเลิก</button></a>
                    </div>
                </div>
            </div>

            <div class="from-pay">
                <div class="detailsPay">
                        <div class="detailsLeft">
                            <img src="/image/img.png" alt="">
                        </div>
                        <div class="detailsRight">
                            <h3>สนาม B (ขนาดเล็ก)</h3><hr>
                            <p>- วันที่ 07/03/2022</p>
                            <p>- เวลา 13.00-14.00</p>
                            <p>- เวลา 14.00-15.00</p>
                            <p>- 2 ชั่วโมง ราคา 800 บาท</p>
                            <button class="btnCf-pay" type="submit" >ยืนยัน</button>
                        <a href="/index_admin"><button class="btnCancel-pay" type="button">ยกเลิก</button></a>
                    </div>
                </div>
            </div>
        </div>

    
       
      
      


</body>
</html>