<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/navbar_admin.css'); ?>">
  <link rel= "stylesheet" type= "text/css" href= "<?php echo base_url('./css/employee.css'); ?>" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/promotion.css'); ?>">

  <title>จัดการโปรโมชั่น</title>
</head>


<body>
  <?php require('component/navbar_admin.php') ?>

  <center>
    <h1>จัดการการโปรโมชั่น</h1>
  </center>




  <center>
    <div class="table-style">
      <table style="width:100%">
        <tr>
          <td>ลำดับ</td>
          <td>รายละเอียดโปรโมชั่น</td>
          <td><img src="https://cdn.discordapp.com/attachments/934731258976677898/957855022903857152/plus_1.png" width="30px" height="30px" onclick="AddPromotion()"></td>

        </tr>
        <tr>
          <td>001</td>
          <td>ฟรีน้ำเปล่าขนาด 500 ml. 1 แพ็ค</td>
          <td>
            <img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="25px" height="25px">
          </td>
        </tr>
        <tr>
          <td>002</td>
          <td>ฟรีน้ำเปล่าขนาด 500ml. กับ ผ้าเย็น 10 ผืน</td>
            <td><img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="25px" height="25px"></td>
          </td>
        </tr>
        <tr>
      </table>


    </div>
    <div class="form-popup" id="myForm">
      <form action="/action_page.php" class="form-container">
        <h3>เพิ่มข้อมูลโปรโมชั่น</h3>
        <div class="form-promotion">

          <input type="text" placeholder="กรุณากรอกโปรโมชั่น" value="">
          <div class="form-btn">
            <button class="btnCf" type="submit">ยืนยัน</button>
            <button onclick="closeForm()" class="btnCancel" type="button">ยกเลิก</button>
          </div>
      </form>
    </div>

  </center>

</body>

<script>
  function AddPromotion() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>

</html>