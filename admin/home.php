<!DOCTYPE HTML>
<?php
	require_once 'session.php';
	require_once 'account_name.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Simple Membership  System</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand"> Bimbingan Belajar </a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a><span class = "glyphicon glyphicon-user"></span> <?php echo $acc_name?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
		</div>
	</nav>
	<div class = "container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Biodata Guru</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="member.php">Data Siswa</a></li>
			<li><a href="club.php">Mata Pelajaran</a></li>
			<li ><a href="#">Jadwal Pelajaran</a></li>
            <li><a href="#">Harga Pendaftaran</a></li>
		</ul>
		<br />
		<div class = "col-md-12 well">
			
		<main>
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">BIODATA GURU</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="firstName" class="form-label">Nama Lengkap</label>
              <input  type="text" class="form-control" id="name" placeholder="Masukan nama lengkap" value="" required>
              <div class="invalid-feedback">
                Full Name
              </div>
            </div>

            

            <div class="col-12">
              <label for="address" class="form-label">Tempat Tgl Lahir</label>
              <input type="text" class="form-control" id="address" placeholder="..." required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Jenis Kelamin <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="...">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="..." required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Agama <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="...">
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Status Perkawinan <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="...">
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Pekerjaan <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="...">
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Kewarganegaraan <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="...">
            </div>

            
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">SIMPAN</button>
        </form>
		
      </div>
    </div>
  </main>
		</div>
	</div>
	<br>
	<br>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
		<label class = "pull-right">&copy; <?php echo date('Y', strtotime('+8 HOURS'))?> GILANG ROMADHAN</b></label>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>