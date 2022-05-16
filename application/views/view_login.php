<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISPEDAKEP</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>aset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-5 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
            <!-- Nested Row within Card Body -->
            
           
              
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Pengelolaan Data Kepegawaian</h1>
                    <h3 class="h5 text-black-900 mb-4">Silahkan Masuk!</h3>
                    <h5><?php echo $this->session->flashdata('info');?></h5>
                  </div>
                  <form action="<?php echo site_url('login/ceklogin')?>" method="post" name="Login_Form" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user"  placeholder="Masukan Nama Pengguna...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Kata Sandi">
                    </div>
                    <div class="form-group">
                   
                    </div>
                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Masuk</button>
                      
                    
                    
                    
                    
                  </form>
                 
                </div>
              </div>
            
          
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>aset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>aset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>aset/js/sb-admin-2.min.js"></script>

</body>

</html>
