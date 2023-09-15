@extends('home.header')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
             
              <!-- Horizontal Steppers -->



<!-- Horizontal Steppers -->

<!-- /.Horizontal Steppers -->
<!-- /.Horizontal Steppers -->
            
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
       

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Information</h5>

              <!-- Vertical Form -->
              <form class="row g-3"action="{{ route('store')}}" method="post">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label" name="date_event">Date of Survey</label>
                  <input type="date" class="form-control" id="inputNanme4" name="date_event">
                  @error('date_event')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"  name="name">First Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name="name">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label"  name="email">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" name="email">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label"  name="password">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" name="password">
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label"  name="address">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                  @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="text-center">
                 <button type="submit" class="btn btn-primary" style="float: right; width: 9rem; font-size: 19px; margin: 5px 30px;">Next</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

      

       

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @extends('home.footer')
</body>

</html>