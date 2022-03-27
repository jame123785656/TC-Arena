<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/userhistory.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_user.css'); ?>" >
    <title>History</title>
</head>
<body>

    <?php require('component/navbar_user.php') ?>

    <div class="box-table">
    <h1>ประวัติการจอง</h1>

        <div class="items-table">
            <table>
            <tr>
                <th>วัน/เวลาที่ทำรายการ</th>
                <th>วัน/เวลาที่จอง</th>
                <th>สนามที่จอง</th>
                <th>จำนวนชั่วโมง</th>
                <th>จำนวนเงิน</th>
                <th>สถานะ</th>
            </tr>
<?php if ($user_history) : ?>
    <?php foreach ($user_history as $user_history) : ?>
            <tr>
                <td><?php echo $user_history['H_time']; ?></td>
                <td><?php echo $user_history['H_Tbook']; ?></td>
                <td><?php echo $user_history['H_field']; ?></td>
                <td><?php echo $user_history['H_hour']; ?></td>
                <td><?php echo $user_history['H_price']; ?></td>
                <td><?php echo $user_history['H_status']; ?></td>
            </tr>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
        
        </table>
    </div>    

</body>
</html>