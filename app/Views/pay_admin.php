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
    <title>จัดการชำระเงิน</title>
</head>
<body>

<?php require('component/navbar_admin.php') ?>

    <h4>จัดการชำระเงิน</h4>
 
            <div class="row">
               <div class="from-pay">
                     <?php if ($booking) : ?>
                        <?php foreach ($booking as $booking) : ?>
                 <div class="detailsPay">
                    <div class="detailsLeft">
                    <input type="hidden" name="B_id" value="<?php echo  $booking['B_id']; ?>"> 
                        <img src="/img_ slip/<?php echo $booking['B_img'] ?>">
                    </div>
                    <div class="detailsRight">
                        <h3><?php echo $booking['Name']; ?></h3><hr>
                        <p>ชื่อ <?php echo $booking['name']; ?></p>
                        <p>-วันที่ <?php echo $booking['B_day']; ?></p>
                        <?php  
                        $count = 0;
                        if ($detail) : ?>
                        <?php foreach ($detail as $details) : ?>

                            <?php if($details['d_id'] == $booking['B_id']){
                                $count += 1;
                        echo  $details['T_start']; ?>-<?php echo $details['T_end'].'<br/>' ;
                            }?>
                        <?php endforeach; ?>
                            <?php endif; ?>
                      
                        <p>- <?php echo $count ?> ชั่วโมง ราคา <?= $sumprice[] = $booking['Price'] * $count?> บาท</p>
                        <a href="<?php echo base_url('/pay_admin/update_pay') ?>"><button class="btnCf-pay" type="button" >ยืนยัน</button></a>
                        <a href="/index_admin"><button class="btnCancel-pay" type="button">ยกเลิก</button></a>
                    </div>
                </div>
                <?php endforeach; ?>
                            <?php endif; ?>
            </div>


    
       
      
      


</body>
</html>