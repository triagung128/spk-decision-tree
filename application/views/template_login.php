<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login | Aplikasi Identifikasi Varietas Ubi Jalar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Aplikasi Identifikasi Varietas Ubi Jalar</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">			            	
			                <h6>Sign In</h6>
			                <?php if ($this->session->flashdata('gagal_login') == TRUE) : ?>
                            	<div class="text-center" style="color: red; margin-bottom: 30px; font-size: 15px;"><?php echo $this->session->flashdata('gagal_login'); ?></div>
                        	<?php endif; ?>
			                <form action="<?php echo base_url('login/cek_login'); ?>" method="POST">
			                	<input class="form-control" type="text" name="username" placeholder="Username" required>
			                	<input class="form-control" type="password" name="password" placeholder="Password" required>
			                	<button type="submit" name="submit" class="btn btn-primary signup">Login</button>
			                </form>             
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/custom.js"></script>
  </body>
</html>