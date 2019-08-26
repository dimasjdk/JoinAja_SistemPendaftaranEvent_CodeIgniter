<!doctype html>
<html>

<!-- Mirrored from themeforest.quadcodes.com/site/eventicka/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2019 15:02:12 GMT -->
<head>
	<?php include_once('layouts/partials/mister.php'); ?>

</head>

<body>
<?php include_once('layouts/partials/header.php'); ?>

<!-- ## CONTENT WRAPPER ## -->
<div id="qcContentWrapper">

	<!-- ## PAGE TITLE ## -->
	

	<!-- ## PAGE CONTENT ## -->
	<section id="qcContent">
		<div class="qcContainer">
		
			<!-- ## MOB NAV ## -->
			<div id="qcMbTrigger"></div>	

			<!-- ## TABS ## -->
			<div id="qcTabs" class="tabs">

				<!-- ## TAB NAV ## -->
				<ul id="qcTabNav" class="clearfix">
					<li><a href="#tab-1"><i class="icon-ticket icon"></i> <span>Book Ticket</span></a></li>
					<li><a href="#tab-2"><i class="icon-book-open icon"></i> <span>FAQ's</span></a></li>
					<li><a href="#tab-3"><i class="icon-lkdto icon"></i> <span>T & C</span></a></li>
					<li><a href="#tab-4"><i class="icon-mail-1 icon"></i> <span>Contact</span></a></li>
				</ul>


				<!-- ===============================================

					PAGE 1 - TICKET

				=============================================== -->
				<div id="tab-1" class="qcTabPage clearfix">

					<!-- ## ROW ## -->
					<div class="ticket row clearfix">

						<!-- ## TAB TITLE & DESC ## -->
						<div class="col-4 col" >
							<div class="qcTabTitle no-border">
								<h4>Book ticket<span> Hurry ! Limited attendees only</span></h4>
								<p class="qcPageDesc full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
							</div>
						</div>

						<!-- ## TICKET ## -->
						<div class="col-8 col">
							<div class="box no-border nopad">
								<div class="qcTcktRegForm">
								
									<!-- ## MODULE TITLE ## -->
									<div class="qcModTitle">
										<h1>R S V P</h1>
										<p>Fill out the following form.</p>
									</div>
									
									<!-- ## TICKET FORM ## -->
									<form class="" action="<?php echo base_url('peserta/store');?>" method="post">
										<ul class="clearfix">
											
												<div class="wrapper">
													<input type="hidden" name="_token" value=" csrf_token() ">
													
													<input type="hidden" name="pin" class="requiredField" value="<?php echo substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5)?>" readonly="true" />
												</div>
											<li>
												<div class="wrapper">
													<label for="name">Name</label>
													<input type="text" name="name" class="requiredField"  placeholder="Enter full name" />
												</div>
											</li>
											<li>
												<div class="wrapper">
													<label for="email">Email</label>
													<input type="email" name="email" class="email requiredField" placeholder="Enter email-id" />
												</div>
											</li>
											<li>
												<div class="wrapper">
													<label for="phone">Phone</label>
													<input type="tel" name="telp" class="requiredField"  placeholder="Enter contact number" />
												</div>
											</li>
											
										</ul>
										
										<div class="qcTcktSubmit">
											<input type="submit" name="Submit" value="Daftar" class="btn btn-primary"/>
											
										</div>
									</form>
								</div>
								<!-- ## TICKET FORM END ## -->
							</div>
						</div>
						<!-- ## TICKET END ## -->

					</div>
					<!-- ## ROW END ## -->

					<!-- ## ROW ## -->
					<div class="dblBorder">
						<div class="row clearfix">
							<div class="col-12 col">
								<!-- ## MODULE TITLE ## -->
								<div class="qcModTitle">
									<h1>Pricing Table</h1>
									<p>Ticket packages & Features</p>
								</div>
								<!-- ## PRICING ## -->
								<div class="qcPricingWrapper clearfix">
									<!-- ## PRICING 1 ## -->
									<div class="qcPricing col-4 col">
										<div class="box">
											<header>Early Bird</header>
											<div class="price"><span>$15</span> Per Entry</div>
											<ul>
												<li></li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
											</ul>
											<footer><a href="#">Buy Now</a></footer>
										</div>
									</div>
									<!-- ## PRICING 2 ## -->
									<div class="qcPricing col-4 col">
										<div class="box">
											<header>General</header>
											<div class="price"><span>$25</span> Per Entry</div>
											<ul>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
											</ul>
											<footer><a href="#">Buy Now</a></footer>
										</div>
									</div>
									<!-- ## PRICING 3 ## -->
									<div class="qcPricing col-4 col">
										<div class="box">
											<header>VIP</header>
											<div class="price"><span>$50</span> Per Entry</div>
											<ul>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Lorem ipsum dolor sit amet</li>
											</ul>
											<footer><a href="#">Buy Now</a></footer>
										</div>
									</div>
								</div>
								<!-- ## PRICING ## -->
							</div>
						</div>
					</div>
					<!-- ## ROW END ## -->

				</div>
				<!-- ## PAGE 1 END ## -->



				



				
				

			</div>
			<!-- ## TABS END ## -->

		</div>
	</section>
	<!-- ## PAGE CONTENT END ## -->


</div>
<!-- ## CONTENT WRAPPER END ## -->

<?php include_once('layouts/partials/header.php'); ?>

</body>