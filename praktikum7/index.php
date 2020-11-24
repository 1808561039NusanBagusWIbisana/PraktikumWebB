<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Praktikum 7</title>
  </head>
  <body>
    <?php
    $tugas = $uts = $uas = $nama = $nim = $akhir = "";
    if(isset($_POST["submit"]))
    {
         $nama = $_POST['nama'];
         $nim = $_POST['nim'];
         $tugas = $_POST['tugas'];
         $uts = $_POST['uts'];
         $uas = $_POST['uas'];

         $akhir=($tugas+$uts+$uas)/3;
     }
     ?>
    <form action="" method="post" class="form">
       Nama <br> <input type="text" name="nama" value="<?php echo $nama ?>"><br>
       NIM <br> <input type="text" name="nim" value="<?php echo $nim ?>"><br>
       Nilai Tugas <br> <input type="text" name="tugas" value="<?php echo $tugas;?>"><br>
       Nilai UTS <br> <input type="text" name="uts" value="<?php echo $uts ?>"><br>
       Nilai UAS <br> <input type="text" name="uas" value="<?php echo $uas ?>"><br>
       Nilai Akhir anda <br> <input readonly type="text" name="" value="<?php echo $akhir ?>"><br>
       <input type="submit" name="submit" value="submit">
       <?php if(isset($_POST["submit"]))
        {
          if ($akhir>=80) {
            echo "Anda lulus dengan predikat A";
          }
          elseif ($akhir>=70){
            echo "Anda lulus dengan predikat B";
          }
          elseif ($akhir>=60) {
            echo "Anda lulus dengan predika C";
          }
          else{
            echo "Maaf anda tidak lulus";
          }
        }
       ?>
    </form>
  </body>
</html>

<style media="screen">
  .form{
    position: fixed;
    width: 20%;
    height: relative;
    margin : 10% 40%;
    padding : 1px 1px;
    background-color:#e8f224;
  }

  input{
    width: 100%;
    margin-right:1px;
    border-width: 0 0;
    padding : 0 0;
  }
</style>
