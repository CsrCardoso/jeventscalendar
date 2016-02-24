
<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->msg; ?></h1>
kjhjdhdhhdh
	<!-- Grid CSS File (only needed for demo page) -->
	<link rel="stylesheet" href="http://www.vissit.com/projects/eventCalendar/css/paragridma.css">

	<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
	<link rel="stylesheet" href="http://www.vissit.com/projects/eventCalendar/css/eventCalendar.css">

	<!-- Theme CSS file: it makes eventCalendar nicer -->
	<link rel="stylesheet" href="http://www.vissit.com/projects/eventCalendar/css/eventCalendar_theme_responsive.css">

	<!-- Grid CSS File (only needed for demo page) -->
	<?php 
		JHTML::stylesheet("assets/csx<zxz<x<z/paragridma.css", array(), true);
	?>

	<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
	<?php 
		JHTML::stylesheet("com_jeventscalendar/assets/css/eventCalendar.css", array(), true);
	?>
	<!-- Theme CSS file: it makes eventCalendar nicer -->
	<?php 
		JHTML::stylesheet("components/com_jeventscalendar/assets/css/eventCalendar_theme_responsive.css", array(), true);
	?>
	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>


<div class="row">
	<div class="g6">
		<h2 class="h4">Human Date Format</h2>
		<p class="demoDesc">Most of you don't like timestamp date format, so now you can use another formats</p>
		<div id="eventCalendarHumanDate"></div>
		<script>
			$(document).ready(function() {
				$("#eventCalendarHumanDate").eventCalendar({
					eventsjson: 'json/event.humanDate.json.php',
					jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
				});
			});
		</script>
		<pre>$(id).eventCalendar({
			  eventsjson: 'file.json',
			  jsonDateFormat: 'human'
		});</pre>
	</div>
</div>



<!--script src="js/jquery.timeago.js" type="text/javascript"></script-->
<!--<script src="js/jquery.eventCalendar.min.js" type="text/javascript"></script>-->
<script src="http://www.vissit.com/projects/eventCalendar/js/jquery.eventCalendar.min.js" type="text/javascript"></script>
<?php
JHTML::script("com_jeventscalendar/assets/js/jquery.eventCalendar.js");
?>


