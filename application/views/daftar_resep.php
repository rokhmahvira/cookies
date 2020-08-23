<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("master/head.php") ?>
</head>

<body class="no-skin">
	<!-- Master Navbar -->
	<?php $this->load->view("master/navbar.php") ?>

	<div class="main-container" id="main-container">
		<!-- Master Sidebar -->
		<?php $this->load->view("master/sidebar.php") ?>

		<div class="main-content">
			<div class="main-content-inner">
				<!-- Master Breadcrumbs -->
				<?php $this->load->view("master/breadcrumbs.php") ?>
				<div class="space-12"></div>
				<!-- PAGE CONTENT -->
				<div class="page-content">
					<!-- DAFTAR RESEP -->
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<div class="row">
								<!-- #section:pages/pricing.large -->
								<div class="col-xs-6 col-sm-3 pricing-box">
									<div class="widget-box widget-color-dark">
										<!-- <div class="widget-header">
											<h5 class="widget-title bigger lighter">Basic Package</h5>
										</div> -->
										<br>
										<img src="<?php echo base_url() ?>assets/assets/images/gallery/image-1.jpg" style="display:block; margin:auto; width:256px">

										<div class=" widget-body">
											<div class="widget-main">
												<div class="price">
													<a href="assets/build/demo/email-navbar.html" target="_self" class="link">Cookie</a>
												</div>
											</div>

											<div>
												<a href="#" class="btn btn-block btn-inverse">
													<i class="ace-icon fa fa-trash bigger-110"></i>
													<span>Delete</span>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-sm-3 pricing-box">
									<div class="widget-box widget-color-orange">
										<div class="widget-header">
											<h5 class="widget-title bigger lighter">Starter Package</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<ul class="list-unstyled spaced2">
													<li>
														<i class="ace-icon fa fa-check green"></i>
														50 GB Disk Space
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														1 TB Bandwidth
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														1000 Email Accounts
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														100 MySQL Databases
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														$25 Ad Credit
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Free Domain
													</li>
												</ul>

												<hr />
												<div class="price">
													$10
													<small>/month</small>
												</div>
											</div>

											<div>
												<a href="#" class="btn btn-block btn-warning">
													<i class="ace-icon fa fa-shopping-cart bigger-110"></i>
													<span>Buy</span>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-sm-3 pricing-box">
									<div class="widget-box widget-color-blue">
										<div class="widget-header">
											<h5 class="widget-title bigger lighter">Business Package</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<ul class="list-unstyled spaced2">
													<li>
														<i class="ace-icon fa fa-check green"></i>
														200 GB Disk Space
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Unlimited Bandwidth
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														1000 Email Accounts
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														200 MySQL Databases
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														$25 Ad Credit
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Free Domain
													</li>
												</ul>

												<hr />
												<div class="price">
													$15
													<small>/month</small>
												</div>
											</div>

											<div>
												<a href="#" class="btn btn-block btn-primary">
													<i class="ace-icon fa fa-shopping-cart bigger-110"></i>
													<span>Buy</span>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-6 col-sm-3 pricing-box">
									<div class="widget-box widget-color-green">
										<div class="widget-header">
											<h5 class="widget-title bigger lighter">Ultimate Package</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<ul class="list-unstyled spaced2">
													<li>
														<i class="ace-icon fa fa-check green"></i>
														Unlimited Space
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Unlimited Bandwidth
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Unlimited Email Accounts
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														Unlimited MySQL Databases
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														$50 Ad Credit
													</li>

													<li>
														<i class="ace-icon fa fa-check green"></i>
														2 Free Domains
													</li>
												</ul>

												<hr />
												<div class="price">
													$25
													<small>/month</small>
												</div>
											</div>

											<div>
												<a href="#" class="btn btn-block btn-success">
													<i class="ace-icon fa fa-shopping-cart bigger-110"></i>
													<span>Buy</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->

	</div>
	<!--END PAGE CONTENT -->

	</div>

	</div>
	<!--END MAIN CONTENT-->

	<!-- FOOTER -->
	<?php $this->load->view("master/footer.php") ?>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>

	</div> <!-- END MAIN-CONTAINER -->
	<!-- JS SCRIPT -->
	<?php $this->load->view("master/js.php") ?>
</body>

</html>
