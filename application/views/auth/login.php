<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>LARGO | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="LARGO" name="description" />
        <meta content="" name="author" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/select2/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/pages/css/login-2.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/pages/css/custom.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <body class=" login">
        <div class="logo">
            <a href="/">
                <img src="<?php echo base_url('assets/pages/img/logo-137.png') ?>" alt="" /> </a>
        </div>

        <div class="content">
            <form class="login-form" action="index.html" method="post">
                <div class="form-title text-center">
                    <span class="form-title">Sistem Informasi Barang</span><br>
                    <span class="form-subtitle">LARGO</span>
                </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Nama user dan password tidak boleh kosong </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nama user</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Nama user" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn proses btn-block fn16 uppercase"><i class="fa fa-unlock"> </i> L o g i n</button>
                </div>
                <div class="form-actions">
                    <div class="pull-left">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" value="1" /> Ingat saya
                            <span></span>
                        </label>
                    </div>
                    
                </div>
            </form>

        </div>
        <div class="copyright"> 2018 © LARGO.</div>
        
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-validation/js/additional-methods.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/select2/js/select2.full.min.js') ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/pages/scripts/login.min.js') ?>" type="text/javascript"></script>
    </body>

</html>