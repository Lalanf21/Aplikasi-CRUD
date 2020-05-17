<!DOCTYPE html>
  <html>
    <head>
      <title>Latihan CRUD</title>
      <!-- Font awesome -->
      <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css') ?>">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css') ?>"  media="screen,projection"/>
      <!-- css  -->
      <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ?>">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="blue darken-2">
          <div class="container">
            <span class="brand-logo"> Aplikasi CRUD </span>
            <div class="nav-wrapper">
              <ul class="right hide-on-med-and-down">
                <li class="active"> <a href="<?=base_url('beranda') ?>">HOME</a></li>  
                <li> <a href="<?=base_url('Data_Mahasiswa') ?>">Data Mahasiswa</a></li>  
                <li> <a href="<?=base_url('beranda/about') ?>">About</a></li>  
              </ul>
            <!-- akhir dropdown navbar -->
            </div>
          </div>
        </nav>
      </div>
      <!-- akhir navbar -->

      

      <!-- isi konten -->
      <main>
        <?php $this->load->view($konten); ?>
      </main>
      <!-- akhir isi konten -->

      
      <!-- footer -->
    <footer class="page-footer blue darken-3">
      <div class="footer-copyright">
        <div class="container center">
          © 2019 Created by <a href="">Lalan Fsdasd</a>
        </div>
      </div>
    </footer>
      <!-- akhir footer -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/js/materialize.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/js/script.js') ?>"></script>
    </body>
</html>     
        <!-- <?php $this->load->view($data['konten']) ?>
        di atas adalah script standard MVC, kalau di CI maka langsung pakai yang bawah -->