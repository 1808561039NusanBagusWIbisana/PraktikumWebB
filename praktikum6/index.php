<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 6</title>
</head>
<body>
  <div class="kalkulator">
    <label>Masukan bilangan 1<br></label>
    <input type="text" id="bil1" /><br>
    <label>Masukan bilangan 2<br></label>
    <input type="text" id="bil2" /><br>
    <label>Operasi</label><br>
    <select id="operasi">
      <option value="1">+</option>
      <option value="2">-</option>
      <option value="3">x</option>
      <option value="4">/</option>
      <option value="5">X²</option>
      <option value="6">%</option>
    </select>
    <br>
    <label>Hasil</label><br>
    <input readonly type="text" id="hasil"/><br>
    <button type="button" onclick="hitung()">Hitung</button><br>
  </div>

	<script>
		function hitung() {
      total=0;
      bil1 = parseInt(document.getElementById("bil1").value);
      bil2 = parseInt(document.getElementById("bil2").value);
      operasi = document.getElementById("operasi").value;
      switch (operasi) {
        case "1":
          total=bil1+bil2;
        break;
        case "2":
          total=bil1-bil2;
        break;
        case "3":
          total=bil1*bil2;
        break;
        case "4":
          total=bil1/bil2;
        break;
        case "5":
          total=bil1*bil1;
        break;
        case "6":
          total=bil1*100;
        break;
        default:
        window.alert('error yang tidak diketahui');
      }
      if(operasi=="6")
      document.getElementById("hasil").value = total+"%";
      else
      document.getElementById("hasil").value = total;
		}
	</script>

  <style media="screen">
      body{
        background: #F2F2F2;
        font-family: sans-serif;
      }

      .kalkulator{
        width: 335px;
        background: #2F495A;
        margin: 100px auto;
        padding: 10px 20px 50px 20px;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px #D1D1D1;
      }

      label{
        color:white;
      }
      input{
        width:100%;
      }

      button{
        float:right;
      }
  </style>

</body>
</html>
