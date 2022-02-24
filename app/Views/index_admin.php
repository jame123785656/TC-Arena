<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/employee.css'); ?>">

  <title>TC Arena</title>
</head>


<body>
  <?php require('component/navbar_admin.php') ?>

  <img src="https://cdn.discordapp.com/attachments/934731258976677898/935544561093181500/add.png" width="35px" height="35px" align="right" onclick="openForm()" Open Form>
  <center>
    <h1>จัดการการจองสนาม</h1>
  </center>
 
 <?php if ($field) : ?>
    <?php foreach ($field as $field) : ?>
      <div class="card7">
    
        <h4><?php echo $field['Name']; ?></h4>
        <img src="/img/<?php echo $field['f_image'] ?>" style="width:20%">
        <div class="card-body">
          <p class="card-text">
         <?php echo $field['Price']; ?> บาท
          </p>
          <?php echo $field['person']; ?> คน<br>
          <?php echo $field['Promotion']; ?>
          <br>
          <br>
          <center>
            <a href="#" class="btn-edit">แก้ไข</a>
            <a href="#" class="btn-deleted">ลบ</a>
          </center>
        </div>
      </div>

    <?php endforeach; ?>
  <?php endif; ?>


  <!-- Popup -->
  <div class="form-popup" id="myForm">
    <form action="/indexemployee/insert" class="form-container" enctype="multipart/form-data">
      <center>
        <h1>เพิ่มข้อมูลสนาม</h1>
      </center>

      <br>
      <center>
        <h4 for="inputf_image">รูปภาพ</h4>


        <input type="file" name="f_image" accept="img/*">
      </center>

      <label for="inputName"><b>ชื่อสนาม</b></label>
      <input type="text" placeholder="กรุณาระบุชื่อสนาม" name="Name" id="inputforName" value="<?= set_value('Name'); ?>" required>

      <label for="inputType"><b>เพิ่มขนาดสนาม</b></label>
      <input type="text" placeholder="กรุณาระบุขนาดสนาม" name="Type" id="inputforType" value="<?= set_value('Type'); ?>" required>

      <label for="inputperson"><b>เพิ่มจำนวนผู้เล่น</b></label>
      <input type="text" placeholder="กรุณาระบุจำนวนผู้เล่นที่สนามรองรับ" name="person" id="inputforperson" value="<?= set_value('person'); ?>" required>

      <label for="inputPrice"><b>เพิ่มค่าบริการ/ชม.</b></label>
      <input type="text" placeholder="กรุณาระบุค่าบริการ" name="Price" id="inputforPrice" value="<?= set_value('Price'); ?>" required>

      <label for="inputPromotion"><b>เพิ่มโปรโมชั่น</b>.</b></label>
      <input type="text" placeholder="กรุณาระบุโปรโมชั่น" name="Promotion" id="inputforPromotion" value="<?= set_value('Promotion'); ?>" required>


      <button type="submit" class="btn-1">ยืนยัน</button>
      <button type="button" class="btn-2" onclick="closeForm()">ยกเลิก</button>
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

  <script>
    function triggerClick() {
      document.querySelector('#profileimage').click();
    }

    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>


</body>

</html>