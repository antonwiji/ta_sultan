<!doctype html>
<html class="no-js" lang="en">

<?php 
	require 'koneksi.php';

    $id = $_GET["id"];

    $barangs = query("SELECT * FROM barang WHERE id = $id")[0];
    
    ?>

<html>
<head>
<title>Data User</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
        function getArea(area){
                var printPage = document.getElementById(area).innerHTML;
                var oriPage = document.body.innerHTML;
                document.body.innerHTML = printPage;
                window.print();
                document.body.innerHTML = oriPage;

        }


</script>

</head>

<body>
  
<div class="container">
<table class="table table-dark mt-4" border="1" cellpadding="10" cellspacing="0">
    <table id="area" class="display" style="width:100%"><thead class="thead-dark">
    <tr>
    <th>Foto Barang</th>
    <th>Nama Barang</th>
    <th>dekskripsi</th>
<th>Tanggal Masuk</th>
<th>QR</th>
                                                        
                                                    </tr></thead><tbody>

												
												<tr>
													<td><img src="img/<?= $barangs["gambar"]; ?>" width="250"></td>
		<td><?= $barangs["nama_barang"]; ?></td>
		<td><?= $barangs["deksripsi"]; ?></td>
		<td><?= $barangs["tgl_masuk"]; ?></td>
        <td><img src="<?= $qr;?>" alt=""></td>
        <button onclick="return getArea('area')"> print</button>
												</tr>		
												
										</tbody>
										</table>



    </div>
</div>



<!-- yang bener -->
	

</body>

</html>