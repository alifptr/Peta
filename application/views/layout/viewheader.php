<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SPIG</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Terakhir Diakses : <?=date('d-M-Y')?> &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
<?php if ($this->session->userdata('username') == "") { ?>
<a href="<?= site_url('auth/login') ?>" class="btn btn-danger square-btn-adjust"> Login</a>
<?php } else { ?>

<a href="<?= site_url('auth/logout') ?>" class="btn btn-danger square-btn-adjust">Logout</a>
<?php } ?>
        </nav>   
