<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	    <?php $this->load->view('header_page'); ?>
	  </div>

    <div class="page-content">
    	<div class="row">
  		  <div class="col-md-2">
  		  	<?php $this->load->view('menu_page'); ?>
  		  </div>

  		  <div class="col-md-10">
  		  	<?php echo $contents; ?>
  		  </div>
		  </div>
    </div>

    <!-- <footer>
      <?php $this->load->view('footer_page'); ?>
    </footer> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/tables.js"></script>
  </body>
</html>