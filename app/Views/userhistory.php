<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/userhistory.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_user.css'); ?>" >
    <title>ประวัติการจอง</title>
</head>
<body>

    <?php require('component/navbar_user.php') ?>

    <div class="box-table">
    <h1>ประวัติการจอง</h1>

        <div class="items-table">
            <table>
            <tr>
                <th>วัน/เวลาที่จอง</th>
                <th>สนามที่จอง</th>
                <th>จำนวนชั่วโมง</th>
                <th>จำนวนเงิน</th>
                <th>สถานะ</th>
            </tr>
<?php if ($booking) : ?>
    <?php foreach ($booking as $bookings) : ?>
            <tr>
                <td><?php echo $bookings['B_day']; ?></td>
                <td><?php echo $bookings['Name']; ?></td>  
                <td><?php echo count((array)$detail) ?> ชั่วโมง</td>
                <td><?= $sumprice[] = $bookings['Price'] * count ((array)$detail) ?> บาท</td>
                <td><?php echo $bookings['S_name']; ?></td>
            </tr>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
        
        </table>
    </div>    

</body>
</html>