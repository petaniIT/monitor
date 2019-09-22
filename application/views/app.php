<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Applikasi untuk memonitor sekolah">
    <meta name="author" content="Kuswandi">
    <link rel="shortcut icon" href="<?= base_url('public/img/logo-dki.png') ?>" type="image/x-icon">
 
    <title>UnName APP</title>
    <!-- Icons-->
    <link href="<?= base_url() ?>node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="<?= base_url('public') ?>/vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    
    <!-- Main styles for this application-->
    <link href="<?= base_url('public') ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('public') ?>/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link href="<?= base_url('public') ?>/vendors/toastr/toastr.css" rel="stylesheet" type="text/css">


    <!-- Script Section -->
    <script src="<?= base_url() ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>node_modules/pace-progress/pace.min.js"></script>
    <script src="<?= base_url() ?>node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>

     <!-- Datatable & Bootstrap -->
    <script src="<?= base_url('public') ?>/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('public') ?>/vendors/datatables/dataTables.reload.js"></script>
    <script src="<?= base_url('public') ?>/vendors/datatables/dataTables.bootstrap4.min.js"></script>
    
    <script src="<?= base_url('public') ?>/vendors/toastr/toastr.min.js"></script>
    <script src="<?= base_url('public') ?>/js/app.js"></script>

    <script src="<?= base_url('public') ?>/js/scripts.js"></script>
    <script>
      toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }

    function notify_success(pesan){
      toastr.success(pesan);
    }
        
    function notify_info(pesan){
      toastr.info(pesan);
    }
    
    function notify_error(pesan){
      toastr.error(pesan);
    } 
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?= base_url('public') ?>/img/logo-dki.png" width="40" alt="Logo Brand DKI">
        <img class="navbar-brand-minimized" src="<?= base_url('public') ?>/img/logo-dki.png" width="30" alt="Logo Brand DKI">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="<?= base_url() ?>">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="<?= base_url('public') ?>/img/avatars/default.png" alt="wandinak17@gmail.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">Default</span>
              </a>
            </li>
            <li class="nav-title">Utama</li>
            <?php $role = $this->session->userdata('role_id'); ?>
            <?= menus($role) ?>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <?php if(isset($breadcrumb)) {
            foreach($breadcrumb as $b): ?>
              <?= $b; ?>
          <?php  endforeach; 
          } ?>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <?= $content_view; ?>
          </div> 
        </div>
      </main>
      <aside class="aside-menu">
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Hari ini</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="#">Shellrean</a>
        <span>&copy; 2019 Kuswandi.</span>
      </div>
      <div class="ml-auto">
        <span>Support</span>
        <a href="#">ICT43</a>
      </div>
    </footer>
    <div class="modal fade" id="modal-proses" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div style="text-align: center;">
              <img width="50" src="<?= base_url(); ?>public/img/loading2.gif" /> <br />Data Sedang diproses...              
            </div>
            <br>
            Silahkan refresh bila loading terlalu lama
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </body>
</html>