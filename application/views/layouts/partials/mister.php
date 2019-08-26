<!-- ## SITE META ## -->
<meta charset="utf-8">
<title>JoinAja.com | create your show with us</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?= base_url('assets/'); ?>includes/img/placeholder/favicon.html">


<!-- ## LOAD STYLSHEETS ## -->
<link rel="stylesheet" media="all" href="<?= base_url('assets/'); ?>includes/css/style.css"/>

<!-- ## GOOGLE FONTS ## -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:100,300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

<!-- ## LOAD JAVASCRIPTS ## -->
<script src="<?= base_url('assets/'); ?>includes/js/2.1.1.jquery.min.js'" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>includes/js/supersized.3.2.7.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>includes/js/countdown.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>includes/js/jquery.marquee.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>includes/js/library.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>includes/js/init.js" type="text/javascript"></script>

<!-- ## FULLSCREEN SLIDESHOW ## -->
<script type="text/javascript">
	function slide_fullscreen() {
		jQuery(function($){
			$.supersized({
		// Functionality
		slide_interval          :   8000,
		transition              :   1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed	:   1000,
		// Components
		slide_links		:   'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
		progress_bar	:	1,
		slides 			:   [
		{	image : 'https://placehold.it/1280x1024&text=Slide+1'
	},
	{	image : 'https://placehold.it/1280x1024&text=Slide+2'
}
]
});
		});
	}
	window.onload = slide_fullscreen;
</script>