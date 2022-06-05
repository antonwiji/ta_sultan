<?php
session_start();

require 'out.php';
require 'koneksi.php';

$barang = query("SELECT * FROM barang ORDER BY id DESC")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Barang</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/sultan/">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
         
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<center><h1 class="mt-2">Tambah data barang</h1></center>
<form action="" method="post" enctype="multipart/form-data">
<form>
	<div class="mb-3">
<div class="container">
<form class="row g-3">
  <div class="add-items">
      <div class="row">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nama Barang</label>
          <input type="hidden" name="id" value="<?=$barang["id"]+1; ?> ">
          <input type="text" name="nama_barang1" class="form-control" id="inputEmail4" require placeholder="Nama Barang">
        </div>
        <div class="col-md-1">
          <label for="inputPassword4" class="form-label">Stock</label>
          <input type="text" name="stock" class="form-control"  placeholder="QTY">
        </div>
        <div class="col-md-1">
          <span class="btn btn-success mt-4" type="submit" id="add-items">+</span>  
        </div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Upload Gambar</label>
        <input type="file" name="gambar" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
  </div>
  <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Dekskripsi</label>
        <input type="text" name="deksripsi" class="form-control" >
  </div>
  <div class="col-12 mt-2">
        <a class="btn btn-primary" href="http://localhost/sultan/">Kembali</a>
        <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
      </div>
		
	</form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>

    var i = 1 ;
    $(document).ready(function(){
      $("#add-items").click(function(){
        i++;
        $(".add-items").append(`
        <p>item #${i}</p>
        <div class="row">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nama Barang</label>
          <input type="text" name="nama_barang${i}" class="form-control" id="inputEmail4" require placeholder="Nama Barang">
        </div>
        <div class="col-md-1">
          <label for="inputPassword4" class="form-label">Stock</label>
          <input type="text" name="stock${i}" class="form-control"  placeholder="QTY">
        </div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Upload Gambar</label>
        <input type="file" name="gambar${i}" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
        `);
      });
    });

  </script>
</div>
</body>
</html>