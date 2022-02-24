<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/employee.css'); ?>" >
    <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/navbar.css'); ?>" >
  <title>Empliyee</title>
</head>


<body>
  <?php require('component/navbar_admin.php') ?>
  
        <div class="text-section">
          <p>จัดการจองสนาม</p>
          <h4 onclick="openForm()"><i class="fas fa-plus"></i></h4>
        </div>
        
        <div class="box-card">
          <div class="row">

  <?php if ($field) : ?>
    <?php foreach ($field as $field) : ?>
            <div class="card">
              <p class="title-section"><?php echo $field['Name']; ?></p>
                  <div class="img-show">
                      <img src="/img/<?php echo $field['f_image'] ?>">
                  </div>
                  <div class="text-show">
                      <p><?php echo $field['Type']; ?></p>
                      <p>รองรับผู้เล่นได้มากสุด <?php echo $field['person']; ?> คน</p>
                      <p>อัตราค่าบริกการ ชั่วโมงละ <?php echo $field['Price']; ?> บาท</p>
                      <p>ฟรีน้ำเปล่าขนาด <?php echo $field['Promotion']; ?></p>
                  </div>
                  <div class="btn-show">
                      <button type="button" class="btnEdit">แก้ไข</button>
                      <button type="button" class="btndelete">ลบ</button>
                  </div>
            </div>
    <?php endforeach; ?>
  <?php endif; ?>

          </div>
       </div>

    <!-- Popup -->
    <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <div class="text-header">
                <h3>เพิ่มข้อมูลสนาม</h3>
                <img src="/img/<?php echo $field['f_image'] ?>">
                <input type="file" name="image"  accept="img/*">
            </div>

            <div class="form-field">
                <p>เพิ่มชื่อสนาม</p>
                <input type="text" placeholder="กรุณาใส่ชื่อสนาม">
                <p>เพิ่มขนาดสนาม</p>
                <input type="text" placeholder="กรุณาใส่ชื่อขนาดสนาม">
                <p>เพิ่มจำนวนผู้เล่น</p>
                <input type="text" placeholder="กรุณาใส่จำนวนผู้เล่น">
                <p>เพิ่มค่าบริการ/ชม.</p>
                <input type="" placeholder="กรุณาใส่ค่าบริการ/ชม.">
                <p>เพิ่มโปรโมชั่น</p>
                <input type="text" placeholder="กรุณาใส่โปรโมชั่น">
            </div>
            <div class="form-btn">
                <button class="btnCf" type="submit">ยืนยัน</button>
                <button class="btnCancel" type="submit">ยกเลิก</button>
            </div>
        </form>
    </div>


    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>




</body>

</html>