<!-- ## HEADER ## -->
<header id="qcHomeHeader">
	<div class="row">

		<!-- ## LOGO ## -->
		<div id="qcLogo" class="col-6 col">
			<a href="index.html"><img src="<?= base_url('assets/includes/img/placeholder/logo-header.png') ?>" alt="" /></a>
		</div>

		<!-- ## SITE NAVIGATION ## -->
		<nav id="qcPriNav" class="col-6 col">
			<ul class="clearfix">
				<li><a href="<?= base_url('join/eventdetail'); ?>"><i class="icon-calendar-2 icon"></i> <span>Event Details</span></a></li>
				<li><a href="<?= base_url('join/buyticket'); ?>"><i class="icon-ticket icon"></i> <span>Buy Tickets</span></a></li>
			</ul>
		</nav>

	</div>
	<div class="row">

		<!-- ## COUNTDOWN TIMER ## -->
		<div id="qcEventCountDown" class="col-6 col">
			<!-- ## DAYS ## -->
			<div class="dash days_dash">
				<div class="dash_title">days</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
					<div class="digit digit-3">0</div>
				</div>
			</div>
			<!-- ## HOURS ## -->
			<div class="dash hours_dash">
				<div class="dash_title">hours</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
			<!-- ## MINUTES ## -->
			<div class="dash minutes_dash">
				<div class="dash_title">minutes</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
			<!-- ## SECONDS ## -->
			<div class="dash seconds_dash">
				<div class="dash_title">seconds</div>
				<div class="digits clearfix">
					<div class="digit digit-1">0</div>
					<div class="digit digit-2">0</div>
				</div>
			</div>
		</div>

		<!-- ## EVENT BANNER ## -->
		<div id="qcEventBanner" class="col-6 col">
			<ul>
				<li><b>EVC-2014</b> Enchanted Valley Carnival 2014</li>
				<li><b>#LIVE.</b> As though heaven is on earth.</li>
				<li><b>#LOVE.</b> As though you have never been hurt before.</li>
				<li><b>#DANCE.</b> As though no one is watching you.</li>
			</ul>
		</div>

	</div>
</header>