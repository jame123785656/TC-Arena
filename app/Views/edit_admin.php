<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/employee.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar_admin.css'); ?>" >
  <title>Employee</title>
</head>


<body>
  <?php require('component/navbar_admin.php') ?>
  <div class="text-header">
    
      <form action="Index_admin/" class="form-container-edit">
                <h3>แก้ไขข้อมูลสนาม</h3>
                <br>
                <img src="/img/<?php echo $field['f_image'] ?>" width="200" height="200">
                <input type="file" name="image"  accept="img/* " >
            <div class="form-field">
                <p>เพิ่มชื่อสนาม</p>
                <input type="text" name="Name" placeholder="<?php echo $field['Name']; ?>" >
                <p>เพิ่มขนาดสนาม</p>
                <input type="text" name="Type"  placeholder="<?php echo $field['Type']; ?>">
                <p>เพิ่มจำนวนผู้เล่น</p>
                <input type="text" name="person" placeholder="<?php echo $field['person']; ?>">
                <p>เพิ่มค่าบริการ/ชม.</p>
                <input type="text"  name="Price" placeholder="<?php echo $field['Price']; ?>">
                <p>เพิ่มโปรโมชั่น</p>
                <input type="text" name="Promotion" placeholder="<?php echo $field['Promotion']; ?>">         
            </div>
            <div class="form-btn-edit">
                <button class="btnCf" type="submit" >ยืนยัน</button>
                <a href="/index_admin"><button class="btnCancel" type="submit">ยกเลิก</button></a>
            </div>
</form>
  








  </body>

</html>