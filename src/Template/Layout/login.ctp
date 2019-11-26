<?php 
$DMSDescription = 'Documents Managment System by Solutions-Apps';

 ?>
<!doctype html>
<html lang="en">
  <head>

		<!-- Meta data -->
	    <?= $this->Html->charset('UTF-8') ?>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		 <title>
        	<?= $DMSDescription ?>:
        	<?= $this->fetch('title') ?>
    	</title>

		<!-- Bootstrap Css -->
	    <?= $this->Html->css('plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css') ?>
		<!-- Sidemenu Css -->
    	<?= $this->Html->css('plugins/toggle-sidebar/sidemenu.css') ?>


		<!-- Dashboard css -->
    	<?= $this->Html->css('style.css') ?>
	    <?= $this->Html->css('admin-custom.css') ?>
		<!---Font icons-->
    	<?= $this->Html->css('fonts/font-awesome.min.css') ?>
    	<?= $this->Html->css('icons.css') ?>
    	<?= $this->fetch('meta') ?>
    	<?= $this->fetch('css') ?>
	</head>
	<body class="construction-image">

		<!--Loader-->
		<div id="global-loader">
			<?php echo $this->Html->image('loader.svg', ['alt' => '','class'=>'loader-img']); ?>
		</div>

		<!--Page-->
		<div class="page">
			<div class="page-content z-index-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card mb-0">
								<div class="card-header">
									<h3 class="card-title">Login to your Account</h3>
								</div>
								<div class="card-body">
    								<?= $this->Flash->render() ?>									
                       				 <?= $this->fetch('content') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- JQuery js-->
        <?= $this->Html->script('vendors/jquery-3.2.1.min.js') ?>
        <!-- Bootstrap js -->
        <?= $this->Html->script('plugins/bootstrap-4.3.1-dist/js/popper.min.js') ?>
        <?= $this->Html->script('plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') ?>
        <!--JQuery Sparkline Js-->
        <?= $this->Html->script('vendors/jquery.sparkline.min.js') ?>
        <!-- Circle Progress Js-->
        <?= $this->Html->script('vendors/circle-progress.min.js') ?>
        <!-- Star Rating Js-->
        <?= $this->Html->script('plugins/rating/jquery.rating-stars.js') ?>
        <!-- Fullside-menu Js-->
        <?= $this->Html->script('plugins/toggle-sidebar/sidemenu.js') ?>
        <!-- Custom scroll bar Js-->
        <?= $this->Html->script('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') ?>
        <!--Counters -->
        <?= $this->Html->script('plugins/counters/counterup.min.js') ?>
        <?= $this->Html->script('plugins/counters/waypoints.min.js') ?>
        <!-- Custom Js-->
        <?= $this->Html->script('admin-custom.js') ?>

        <?= $this->fetch('script') ?>

	</body>
</html>