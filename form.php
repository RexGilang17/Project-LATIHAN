<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">KTP</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input  type="text" class="form-control" id="firstName" placeholder="Masukan Nama Kamu" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="... " value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
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

            <div class="col-12">
              <label for="address2" class="form-label">Belaku Hingga <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" placeholder="...">
            </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">SIMPAN</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 MI0441</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
