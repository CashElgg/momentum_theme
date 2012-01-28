<?php
/**
 * Layout CSS
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
body {
	background: #fff;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	width: 940px;
	margin: 0 auto;
	position: relative;
	height: 120px;
	/*border-bottom: 1px dotted #aaa;*/
}
.logo {
	margin-top: 10px;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	width: 940px;
	margin: 0 auto;
}
.elgg-page-body > .elgg-inner {
	margin-top: 25px;
}
.elgg-layout {
	min-height: 360px;
}
.elgg-sidebar {
	position: relative;
	float: right;
	width: 210px;
	margin-left: 40px;
}
.elgg-main {
	position: relative;
	background-color: white;
}
.elgg-main > .elgg-head {
	margin-bottom: 15px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	margin-top: 20px;
}
.elgg-page-footer > .elgg-inner {
	padding-top: 10px;
	border-top: 1px solid #ccc;
	position: relative;
	width: 940px;
	margin: 0 auto;
}
.elgg-page-footer a:hover {
	color: #ccc;
}
