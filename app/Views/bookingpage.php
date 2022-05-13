<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/bookingpage.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_user.css'); ?>" >
    <title>จองสนาม</title>
</head>
<body>
    
<?php require('component/navbar_user.php') ?>


        <p class="big-section">จองสนาม</p>
        <div class="box-card">
<?php if ($field) : ?>
    <?php foreach ($field as $field) : ?>
        
            <p><?php echo $field['T_name']?></p>
            <div class="card">
                <div class="show-imgA">
                    <img src="/adminimage_stadium/<?php echo $field['f_image'] ?>">
                        <div class="img-smallA">
                            <img src="/adminimage_stadium/<?php echo $field['f_image'] ?> ">
                            <img src="/adminimage_stadium/<?php echo $field['f_image'] ?> ">
                            <img src="/adminimage_stadium/<?php echo $field['f_image'] ?> ">
                            <img src="/adminimage_stadium/<?php echo $field['f_image'] ?> ">
                        </div>
                </div>
                <div class="detailsA">
                    <h2><?php echo $field['Name']; ?></h2>
                    <p>- รองรับผู้เล่นได้มากสุด <?php echo $field['person']; ?> คน</p>
                    <p>- อัตราค่าบริกการ ชั่วโมงละ <?php echo $field['Price']; ?> บาท </p>
                    <p>- <?php echo $field['p_name']; ?></p>
                
                    <button type="button" class="btn-reserve" onclick="openForm(<?php echo $field['F_ID'] ?>)">จองสนาม</button>
                </div>
            </div>
    <?php endforeach; ?>
<?php endif; ?>
        </div>

<form method="post" id="popup1" action="<?php echo base_url('Bookingpage/booking');?>" enctype="multipart/form-data">
    <div class="form-popup" id="myForm">
            <div class="text-header">
                <h3>จองสนามฟุตซอล</h3>
                <a href="./bookingpage"><img src="/image/cross.png" alt=""></a>
            </div>
            <hr>
            <div class="form-time">
                <p>วันที่จอง</p>
                <input type="hidden" name="F_ID" id="F_ID02" value="">
                    
                <input type="hidden" name="ID"  disabled class="form-control" id="inputforID"  value="<?php echo  $session->get('ID'); ?>">
                <input type="date" name="B_day" required value="<?= set_value('B_day'); ?>" min="<?php echo date('Y-m-d');?>">
                <p>เวลาที่ต้องการจอง</p>
               <div class="w3-dropdown-hover">
                    <input type="text" placeholder="00.00 - 00.00 น.">
                    <i class="fa-solid fa-angle-down"></i> 
                  
                        <div class="w3-dropdown-content dropdow-item"> 
                          <?php if ($time) : ?>
                        <?php foreach ($time as $time) : ?>
                            <div>                         
                                <input  type="checkbox"   id="time" name="<?php echo 'time'.$time['T_id'] ?>"  value="<?php echo $time['T_id'] ?>">
                                <label for="time"><?php echo $time['T_start']; ?>-<?php echo $time['T_end']; ?></label>
                                </div>
                                 <?php endforeach; ?>
                            <?php endif; ?>
                            </div>
                      
                </div>

               <button class="btnform" type="submit">จองสนาม</button>
            </div>
        </form>
    </div>


        <script>
            function openForm(id){
                document.getElementById("myForm").style.display = "block";
                document.getElementById("F_ID02").value = id;
            }
            function close(){
                document.getElementById("myForm").style.display = "none";
            }
        </script>

    
</body>
</html>


