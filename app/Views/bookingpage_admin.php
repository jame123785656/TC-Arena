<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/employee.css'); ?>">
  <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_admin.css'); ?>" >
  <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/bookingpage_admin.css'); ?>" >

  <title>TC Arena</title>
</head>


<?php require('component/navbar_admin.php') ?>

        <p class="big-section">จองสนาม</p>
        <div class="box-card">
<?php if ($field) : ?>
    <?php foreach ($field as $field) : ?>
            <p><?php echo $field['Type']?></p>
            <div class="card">
                <div class="show-imgA">
                    <img src="/img/<?php echo $field['f_image'] ?>">
                </div>
                <div class="detailsA">
                    <h2><?php echo $field['Name']; ?></h2><hr>
                    <p>- ขนาด 22*42 เมตร</p>
                    <p>- รองรับผู้เล่นได้<?php echo $field['person']; ?> คน</p>
                    <p>- อัตราค่าบริการ ชั่วโมงละ <?php echo $field['Price']; ?> บาท</p>
                    <p>- ฟรีน้ำเปล่าขนาด <?php echo $field['Promotion']; ?></p>
                
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
                <a href="./bookingpage_admin"><img src="/image/cross.png" alt=""></a>
            </div>
            <hr>
            <div class="form-time">
                <p>วันที่จอง</p>
                <input type="date" id="birthday" name="birthday">
                <p>เวลาที่ต้องการจอง</p>
                
                <div class="w3-dropdown-hover">
                    <input type="text" placeholder="00.00 - 00.00 น.">
                    <i class="fa-solid fa-angle-down"></i>
                        <div class="w3-dropdown-content dropdow-item">                          
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> 09.00 - 10.00 น.</label>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike">
                                <label for="vehicle2"> 11.00 - 12.00 น.</label>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike">
                                <label for="vehicle3"> 13.00 - 14.00 น.</label>
                                <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
                                <label for="vehicle4"> 15.00 - 16.00 น.</label>
                                <input type="checkbox" id="vehicle5" name="vehicle5" value="Bike">
                                <label for="vehicle5"> 17.00 - 18.00 น.</label>
                                <input type="checkbox" id="vehicle6" name="vehicle6" value="Bike">
                                <label for="vehicle6"> 19.00 - 20.00 น.</label>
                                <input type="checkbox" id="vehicle7" name="vehicle7" value="Bike">
                                <label for="vehicle7"> 21.00 - 22.00 น.</label>
                        </div>
                </div>

                <a href=""><button class="btnform" type="button">จองสนาม</button></a>
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