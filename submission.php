<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="http://<YOUR URL>.com/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

	<style type="text/css">

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline; }
	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block; }
	body {
		line-height: 1;
		background-color: #ecf0f1; /*off white*/ }
	ol, ul {
		list-style: none; }
	blockquote, q {
		quotes: none; }
	blockquote:before, blockquote:after,
	q:before, q:after {
		content: '';
		content: none; }
	table {
		border-collapse: collapse;
		border-spacing: 0; }


/* #Basic Styles
================================================== */
	body {
		background: #fff;
    	font-family: 'Roboto Slab', serif;
		color: #444;
		-webkit-font-smoothing: antialiased; /* Fix for webkit rendering */
		-webkit-text-size-adjust: 100%;
 }


/* #Typography
================================================== */
	h1, h2, h3, h4, h5, h6 {
		font-family: 'Roboto Slab', serif;
		font-weight: normal; }
	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { font-weight: inherit;}
	h1 { font-size: 46px; line-height: 50px; margin-bottom: 14px;}
	h2 { font-size: 35px; line-height: 40px; margin-bottom: 10px; }
	h3 { font-size: 28px; line-height: 34px; margin-bottom: 8px; }
	h4 { font-size: 21px; line-height: 30px; margin-bottom: 4px; }
	h5 { font-size: 17px; line-height: 24px; }
	h6 { font-size: 14px; line-height: 21px; }
	.subheader { color: #777; }

	p { margin: 0 0 20px 0; }
	p img { margin: 0; }
	p.lead { font-size: 21px; line-height: 27px; color: #777;  }

	em { font-style: italic; }
	strong { font-weight: bold; color: #333; }
	small { font-size: 80%; }

/*	Blockquotes  */
	blockquote, blockquote p { font-size: 17px; line-height: 24px; color: #777; font-style: italic; }
	blockquote { margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; }
	blockquote cite { display: block; font-size: 12px; color: #555; }
	blockquote cite:before { content: "\2014 \0020"; }
	blockquote cite a, blockquote cite a:visited, blockquote cite a:visited { color: #555; }

	hr { border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 10px 0 30px; height: 0; }


/* #Links
================================================== */
	a, a:visited { color: #333; text-decoration: underline; outline: 0; }
	a:hover, a:focus { color: #000; }
	p a, p a:visited { line-height: inherit; }


/* #Lists
================================================== */
	ul, ol { margin-bottom: 20px; }
	ul { list-style: none outside; }
	ol { list-style: decimal; }
	ol, ul.square, ul.circle, ul.disc { margin-left: 30px; }
	ul.square { list-style: square outside; }
	ul.circle { list-style: circle outside; }
	ul.disc { list-style: disc outside; }
	ul ul, ul ol,
	ol ol, ol ul { margin: 4px 0 5px 30px; font-size: 90%;  }
	ul ul li, ul ol li,
	ol ol li, ol ul li { margin-bottom: 6px; }
	li { line-height: 18px; margin-bottom: 12px; }
	ul.large li { line-height: 21px; }
	li p { line-height: 21px; }

/* #Images
================================================== */

	img.scale-with-grid {
		max-width: 100%;
		height: auto; }


/* #Buttons
================================================== */

	.button,
	button,
	input[type="submit"],
	input[type="reset"],
	input[type="button"] {
		background: #eee; /* Old browsers */
		background: #eee -moz-linear-gradient(top, rgba(255,255,255,.2) 0%, rgba(0,0,0,.2) 100%); /* FF3.6+ */
		background: #eee -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,.2)), color-stop(100%,rgba(0,0,0,.2))); /* Chrome,Safari4+ */
		background: #eee -webkit-linear-gradient(top, rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%); /* Chrome10+,Safari5.1+ */
		background: #eee -o-linear-gradient(top, rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%); /* Opera11.10+ */
		background: #eee -ms-linear-gradient(top, rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%); /* IE10+ */
		background: #eee linear-gradient(top, rgba(255,255,255,.2) 0%,rgba(0,0,0,.2) 100%); /* W3C */
	  border: 1px solid #aaa;
	  border-top: 1px solid #ccc;
	  border-left: 1px solid #ccc;
	  -moz-border-radius: 3px;
	  -webkit-border-radius: 3px;
	  border-radius: 3px;
	  color: #444;
	  display: inline-block;
	  font-size: 11px;
	  font-weight: bold;
	  text-decoration: none;
	  text-shadow: 0 1px rgba(255, 255, 255, .75);
	  cursor: pointer;
	  margin-bottom: 20px;
	  line-height: normal;
	  padding: 8px 10px;
	  font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif; }

	.button:hover,
	button:hover,
	input[type="submit"]:hover,
	input[type="reset"]:hover,
	input[type="button"]:hover {
		color: #222;
		background: #ddd; /* Old browsers */
		background: #ddd -moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%); /* FF3.6+ */
		background: #ddd -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,.3)), color-stop(100%,rgba(0,0,0,.3))); /* Chrome,Safari4+ */
		background: #ddd -webkit-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* Chrome10+,Safari5.1+ */
		background: #ddd -o-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* Opera11.10+ */
		background: #ddd -ms-linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* IE10+ */
		background: #ddd linear-gradient(top, rgba(255,255,255,.3) 0%,rgba(0,0,0,.3) 100%); /* W3C */
	  border: 1px solid #888;
	  border-top: 1px solid #aaa;
	  border-left: 1px solid #aaa; }

	.button:active,
	button:active,
	input[type="submit"]:active,
	input[type="reset"]:active,
	input[type="button"]:active {
		border: 1px solid #666;
		background: #ccc; /* Old browsers */
		background: #ccc -moz-linear-gradient(top, rgba(255,255,255,.35) 0%, rgba(10,10,10,.4) 100%); /* FF3.6+ */
		background: #ccc -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,.35)), color-stop(100%,rgba(10,10,10,.4))); /* Chrome,Safari4+ */
		background: #ccc -webkit-linear-gradient(top, rgba(255,255,255,.35) 0%,rgba(10,10,10,.4) 100%); /* Chrome10+,Safari5.1+ */
		background: #ccc -o-linear-gradient(top, rgba(255,255,255,.35) 0%,rgba(10,10,10,.4) 100%); /* Opera11.10+ */
		background: #ccc -ms-linear-gradient(top, rgba(255,255,255,.35) 0%,rgba(10,10,10,.4) 100%); /* IE10+ */
		background: #ccc linear-gradient(top, rgba(255,255,255,.35) 0%,rgba(10,10,10,.4) 100%); /* W3C */ }

	.button.full-width,
	button.full-width,
	input[type="submit"].full-width,
	input[type="reset"].full-width,
	input[type="button"].full-width {
		width: 100%;
		padding-left: 0 !important;
		padding-right: 0 !important;
		text-align: center; }

	/* Fix for odd Mozilla border & padding issues */
	button::-moz-focus-inner,
	input::-moz-focus-inner {
    border: 0;
    padding: 0;
	}


/* #Forms
================================================== */

	form {
		margin-bottom: 20px; }
	fieldset {
		margin-bottom: 20px; }
	input[type="text"],
	input[type="password"],
	input[type="email"],
	textarea,
	select {
		border: 1px solid #ccc;
		padding: 6px 4px;
		outline: none;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		font: 13px "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
		color: #777;
		margin: 0;
		width: 210px;
		max-width: 100%;
		display: block;
		margin-bottom: 20px;
		background: #fff; }
	select {
		padding: 0; }
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="email"]:focus,
	textarea:focus {
		border: 1px solid #aaa;
 		color: #444;
 		-moz-box-shadow: 0 0 3px rgba(0,0,0,.2);
		-webkit-box-shadow: 0 0 3px rgba(0,0,0,.2);
		box-shadow:  0 0 3px rgba(0,0,0,.2); }
	textarea {
		min-height: 60px; }
	label,
	legend {
		display: block;
		font-weight: bold;
		font-size: 13px;  }
	select {
		width: 220px; }
	input[type="checkbox"] {
		display: inline; }
	label span,
	legend span {
		font-weight: normal;
		font-size: 13px;
		color: #444; }

/* #Misc
================================================== */
	.remove-bottom { margin-bottom: 0 !important; }
	.half-bottom { margin-bottom: 10px !important; }
	.add-bottom { margin-bottom: 20px !important; }





	 .container                                  { position: relative; width: 960px; margin: 0 auto; padding: 0; }
    .container .column,
    .container .columns                         { float: left; display: inline; margin-left: 10px; margin-right: 10px; }
    .row                                        { margin-bottom: 20px; }

    /* Nested Column Classes */
    .column.alpha, .columns.alpha               { margin-left: 0; }
    .column.omega, .columns.omega               { margin-right: 0; }

    /* Base Grid */
    .container .one.column,
    .container .one.columns                     { width: 40px;  }
    .container .two.columns                     { width: 100px; }
    .container .three.columns                   { width: 160px; }
    .container .four.columns                    { width: 220px; }
    .container .five.columns                    { width: 280px; }
    .container .six.columns                     { width: 340px; }
    .container .seven.columns                   { width: 400px; }
    .container .eight.columns                   { width: 460px; }
    .container .nine.columns                    { width: 520px; }
    .container .ten.columns                     { width: 580px; }
    .container .eleven.columns                  { width: 640px; }
    .container .twelve.columns                  { width: 700px; }
    .container .thirteen.columns                { width: 760px; }
    .container .fourteen.columns                { width: 820px; }
    .container .fifteen.columns                 { width: 880px; }
    .container .sixteen.columns                 { width: 940px; }

    .container .one-third.column                { width: 300px; }
    .container .two-thirds.column               { width: 620px; }

    /* Offsets */
    .container .offset-by-one                   { padding-left: 60px;  }
    .container .offset-by-two                   { padding-left: 120px; }
    .container .offset-by-three                 { padding-left: 180px; }
    .container .offset-by-four                  { padding-left: 240px; }
    .container .offset-by-five                  { padding-left: 300px; }
    .container .offset-by-six                   { padding-left: 360px; }
    .container .offset-by-seven                 { padding-left: 420px; }
    .container .offset-by-eight                 { padding-left: 480px; }
    .container .offset-by-nine                  { padding-left: 540px; }
    .container .offset-by-ten                   { padding-left: 600px; }
    .container .offset-by-eleven                { padding-left: 660px; }
    .container .offset-by-twelve                { padding-left: 720px; }
    .container .offset-by-thirteen              { padding-left: 780px; }
    .container .offset-by-fourteen              { padding-left: 840px; }
    .container .offset-by-fifteen               { padding-left: 900px; }



/* #Tablet (Portrait)
================================================== */

    /* Note: Design for a width of 768px */

    @media only screen and (min-width: 768px) and (max-width: 959px) {
        .container                                  { width: 768px; }
        .container .column,
        .container .columns                         { margin-left: 10px; margin-right: 10px;  }
        .column.alpha, .columns.alpha               { margin-left: 0; margin-right: 10px; }
        .column.omega, .columns.omega               { margin-right: 0; margin-left: 10px; }
        .alpha.omega                                { margin-left: 0; margin-right: 0; }

        .container .one.column,
        .container .one.columns                     { width: 28px; }
        .container .two.columns                     { width: 76px; }
        .container .three.columns                   { width: 124px; }
        .container .four.columns                    { width: 172px; }
        .container .five.columns                    { width: 220px; }
        .container .six.columns                     { width: 268px; }
        .container .seven.columns                   { width: 316px; }
        .container .eight.columns                   { width: 364px; }
        .container .nine.columns                    { width: 412px; }
        .container .ten.columns                     { width: 460px; }
        .container .eleven.columns                  { width: 508px; }
        .container .twelve.columns                  { width: 556px; }
        .container .thirteen.columns                { width: 604px; }
        .container .fourteen.columns                { width: 652px; }
        .container .fifteen.columns                 { width: 700px; }
        .container .sixteen.columns                 { width: 748px; }

        .container .one-third.column                { width: 236px; }
        .container .two-thirds.column               { width: 492px; }

        /* Offsets */
        .container .offset-by-one                   { padding-left: 48px; }
        .container .offset-by-two                   { padding-left: 96px; }
        .container .offset-by-three                 { padding-left: 144px; }
        .container .offset-by-four                  { padding-left: 192px; }
        .container .offset-by-five                  { padding-left: 240px; }
        .container .offset-by-six                   { padding-left: 288px; }
        .container .offset-by-seven                 { padding-left: 336px; }
        .container .offset-by-eight                 { padding-left: 384px; }
        .container .offset-by-nine                  { padding-left: 432px; }
        .container .offset-by-ten                   { padding-left: 480px; }
        .container .offset-by-eleven                { padding-left: 528px; }
        .container .offset-by-twelve                { padding-left: 576px; }
        .container .offset-by-thirteen              { padding-left: 624px; }
        .container .offset-by-fourteen              { padding-left: 672px; }
        .container .offset-by-fifteen               { padding-left: 720px; }
    }


/*  #Mobile (Portrait)
================================================== */

    /* Note: Design for a width of 320px */

    @media only screen and (max-width: 767px) {
        .container { width: 300px; }
        .container .columns,
        .container .column { margin: 0; }

        .container .one.column,
        .container .one.columns,
        .container .two.columns,
        .container .three.columns,
        .container .four.columns,
        .container .five.columns,
        .container .six.columns,
        .container .seven.columns,
        .container .eight.columns,
        .container .nine.columns,
        .container .ten.columns,
        .container .eleven.columns,
        .container .twelve.columns,
        .container .thirteen.columns,
        .container .fourteen.columns,
        .container .fifteen.columns,
        .container .sixteen.columns,
        .container .one-third.column,
        .container .two-thirds.column  { width: 300px; }

        /* Offsets */
        .container .offset-by-one,
        .container .offset-by-two,
        .container .offset-by-three,
        .container .offset-by-four,
        .container .offset-by-five,
        .container .offset-by-six,
        .container .offset-by-seven,
        .container .offset-by-eight,
        .container .offset-by-nine,
        .container .offset-by-ten,
        .container .offset-by-eleven,
        .container .offset-by-twelve,
        .container .offset-by-thirteen,
        .container .offset-by-fourteen,
        .container .offset-by-fifteen { padding-left: 0; }

    }


/* #Mobile (Landscape)
================================================== */

    /* Note: Design for a width of 480px */

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container { width: 420px; }
        .container .columns,
        .container .column { margin: 0; }

        .container .one.column,
        .container .one.columns,
        .container .two.columns,
        .container .three.columns,
        .container .four.columns,
        .container .five.columns,
        .container .six.columns,
        .container .seven.columns,
        .container .eight.columns,
        .container .nine.columns,
        .container .ten.columns,
        .container .eleven.columns,
        .container .twelve.columns,
        .container .thirteen.columns,
        .container .fourteen.columns,
        .container .fifteen.columns,
        .container .sixteen.columns,
        .container .one-third.column,
        .container .two-thirds.column { width: 420px; }
    }


/* #Clearing
================================================== */

    /* Self Clearing Goodness */
    .container:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; }

    /* Use clearfix class on parent to clear nested columns,
    or wrap each row of columns in a <div class="row"> */
    .clearfix:before,
    .clearfix:after,
    .row:before,
    .row:after {
      content: '\0020';
      display: block;
      overflow: hidden;
      visibility: hidden;
      width: 0;
      height: 0; }
    .row:after,
    .clearfix:after {
      clear: both; }
    .row,
    .clearfix {
      zoom: 1; }

    /* You can also use a <br class="clear" /> to clear columns */
    .clear {
      clear: both;
      display: block;
      overflow: hidden;
      visibility: hidden;
      width: 0;
      height: 0;
    }

.show-for-large { display: block; }
.hide-for-large { display: none; }
.red { color: #C0392B !important; }
.white { color: #ecf0f1 !important; }
.center { text-align: center !important; }
.push-down { margin-top: 10em;}

.entry {
	/*border: solid black 1px;*/
	height: 400px;
	margin-bottom: 2em;
	background-color: #ecf0f1;

		-webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
}

.entryUsername { 
/*	border: solid black 1px; */
	padding: 0 1em;
}

.entryImage {
/*	border: solid black 1px; */
	height: 306px;
	width: 306px;

}

.entryComments {
/*border: solid black 1px;*/
	padding: 1em;
}

header {
	padding: 2em;
	width: 100%;
	background-color: #C0392B;
	position: fixed;
	top: 0;
	z-index: 9999;
}

.title-header {
	position: fixed;
	right: .5em;
	top: .05em;
}

.logo {
	background-image: url('http://gradviceai.com/images/logo.png');
	min-height: 49px;
	max-height: 49px;
	min-width: 37px;
	max-width: 37px;
	position: fixed;
	z-index: 9999;
	top: .5em;
	left: .5em;
}

	/* Media Queries
	====================================================== */

	@media only screen and (max-width: 959px) {
		.show-for-medium { display: block; }
		.hide-for-medium { display: none; }
		.title-header-medium {
			position: fixed;
			right: .5em;
			top: .05em;
			font-size: 2.5em; }

	}

	/* Tablet Portrait size to standard 960 (devices and browsers) */
	@media only screen and (min-width: 768px) and (max-width: 959px) {
		.show-for-medium { display: block; }
		.hide-for-medium { display: none; }
		.title-header-medium {
			position: fixed;
			right: .5em;
			top: .05em;
			font-size: 2.5em; }
	}

	/* All Mobile Sizes (devices and browser) */
	@media only screen and (max-width: 767px) {
		.show-for-small { display: block; }
		.hide-for-small { display: none; }	
		.title-header-small {
			position: fixed;
			right: .5em;
			top: .05em;
			font-size: 1.5em; }	
	}

	/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
	@media only screen and (min-width: 480px) and (max-width: 767px) {}

	/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
	@media only screen and (max-width: 479px) {}

	</style>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->
<?php
require_once('Model.php');

$instagramModel = new Model();
$instgPosts = $instagramModel->getInstgPosts();
?>

	<header>
			<div class="logo"></div>
	</header>
	<div class="sixteen columns container push-down wrapper">
		
			<?php
			foreach ($instgPosts as $post)
			{
			?>
			<div class="five columns entry">
					
				<figure class="entryImage">
					<img src="<?php 
						echo $post['low_res'];?>" height="280" />
				</figure>

				<h5 class="entryUsername red"><?php
					echo $post['user'].' - '.$post['userfullname'];?></h5>

				<div class="entryComments">
					<?php echo str_replace("#<REGISTERED INSTAGRAM TAG>","",$post['caption']);?>
				</div>

			</div><!--entry-->
			<?php
			}
			reset($instgPosts);
			?>

	</div><!-- container -->
	<div class="push-down"></div>
	<footer class="center">
	</footer>


<!-- End Document
================================================== -->
</body>
</html>