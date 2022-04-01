<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/pay.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_user.css'); ?>" >
    <title>Pay</title>
</head>
<body>

    <?php require('component/navbar_user.php') ?>

        <div class="from-pay">
            <h4>ชำระเงิน</h4>
            <div class="detailsPay">
           
                <div class="detailsLeft">
                <?php if ($booking) : ?>
                        <?php foreach ($booking as $booking) : ?>
                <img src="/adminimage_stadium/<?php echo $booking['f_image'] ?>">
                </div>
                <div class="detailsRight">
                    <h3><?php echo $booking['Name']; ?></h3><hr>
                    <p>- วันที่ <?php echo $booking['B_day']; ?></p>
                    <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if ($detail) : ?>
                        <?php foreach ($detail as $detail) : ?>
                    <p>- เวลา <?php echo $detail['T_start']; ?>-<?php echo $detail['T_end']; ?></p>
                    <?php endforeach; ?>
                            <?php endif; ?>
                </div>
                
            </div>
        </div>
        <div class="from-payB">
            <div class="fromLeft">
                <div class="box-icon">
                    <img src="/image/icon-museum.png" alt="">
                    <p>โอนเข้าบัญชี</p>
                </div>
                <div class="box-bank">
                    <div class="img-left">
                        <img src="/image/kungthai.png" alt="">
                    </div>
                    <div class="text-right">
                        <h4>ธนาคารกรุงไทย</h4>
                        <p>เลขที่บัญชี 123-4-56789-0</p>
                        <p>ชื่อ TC Arena</p>
                        
                    </div>
                    <div class="qrCode">
                        <img src="/image/QRcode.png" alt="">
                    </div>
                </div>
                <div class="box-warn">
                    <div class="warn-left">
                        <img src="/image/warning.png" alt="">
                    </div>
                    <div class="Text-right">
                        <h4>หมายเหตุ</h4>
                        <p>เนื่องจาก ป้องกันความผิดพลาด
                        ลูกค้ากรุณาตรวจสอบ ข้อมูลการจองและ
                        จำนวนเงินให้ถูกต้อง
                        </p>
                    </div>
                </div>
            </div>
            <div class="fromRight">
                <div class="icon-img">
                    <img src="/image/add-image.png" alt="">
                    <p>แนบสลิป</p>
                </div>
                <div class="img-check">
                    <img src="/image/img.png" alt="">
                </div>
                <div class="btnO">
                    <button class="btncf" type="button">ยืนยัน</button>
                    <button class="btncan" type="button">ยกเลิก</button>
                </div>
            </div>
        </div>


        <?php require('component/footer.php') ?>

</body>
</html>