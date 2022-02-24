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
    
    <center>
        <h1>จัดการผู้ใช้</h1>
         <form class="search">
        <input type="text" placeholder="ค้นหา" >
        <img src="https://cdn.discordapp.com/attachments/934731258976677898/946021229440172072/search.png" width="20px" height="20px">
      </center>

      
      

    <center>
    <div class="table-style">
    <table style="width:100%">
     <tr>
        <td>ลำดับ</td>
        <td>ชื่อลูกค้า</td>
        <td>ชื่อ-นามสกุล</td>
        <td>อีเมลล์</td>
        <td>เบอร์โทรศัพท์</td>
      </tr>
     <tr>
        <td>001</td>
        <td>นุ้งเจมส์</td>
        <td>ภชรพล ลิมป์สุชาลี</td>
        <td>jaramie123@gmail.com</td>
        <td>089-3488961</td>
        <td> <img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="15px" height="15px" ></td>
      </tr> <tr>
        <td>002</td>
        <td>นุ้งโอ๊ค</td>
        <td>พีรภัทร์ ลิ้มสร้อยเพ็ชร์</td>
        <td>oakley789@gmail.com</td>
        <td>084-4488855</td>
        <td> <img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="15px" height="15px" ></td>
      </tr> <tr>
        <td>003</td>
        <td>นุ้งโกโก้</td>
        <td>โกโก หวานน้อย</td>
        <td>cocolnwza007@gmail.com</td>
        <td>086-7945861</td>
        <td> <img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="15px" height="15px" ></td>
      </tr> <tr>
        <td>004</td>
        <td>นุ้งบิววี่</td>
        <td>ธวัฒณ์ เล้าอรุณ</td>
        <td>biwies456@gmail.com</td>
        <td>081-12123121</td>
        <td> <img src="https://cdn.discordapp.com/attachments/934731258976677898/946017908411236382/bin.png" width="15px" height="15px" ></td>
      </tr>
    </table>
</div>

</center>
    
    
<style>
    /*
Table_Reservation
*/
.table-style{
    border-collapse: collapse;
    background-color:#dddd ;
    border: 1px solid #DADBDB;
    width: 60%;
    border-radius: 2%;
 

}
  
    td {

        border-bottom: 2px solid #cfcbcb;
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: #70635f;
        border: 1px solid #f7f2f2;
        text-align: center;
        padding: 8px;

    }
    .search{
        border-radius: 25px;
     margin-left: 68%;
        margin-bottom: 10px;
        display:flex;

    }

</style>
  </body>

</html>