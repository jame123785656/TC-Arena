<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/bookingpage.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_Admin.css'); ?>" >

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
                    <p>- <?php echo $field['person']; ?> </p>
                    <p>- <?php echo $field['Price']; ?> </p>
                    <p>- <?php echo $field['Promotion']; ?></p>
                
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

                <a href="/pay"><button class="btnform" type="button">จองสนาม</button></a>
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