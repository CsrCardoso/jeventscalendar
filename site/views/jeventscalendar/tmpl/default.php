
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
<h1><?php //echo $this->msg; ?></h1>

<?php
	$doc = JFactory::getDocument();
	$doc->addScript("https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js");
	$doc->addScript(JURI::base() . "media/com_jeventscalendar/js/moment.js");
	$doc->addScript(JURI::base() . "media/com_jeventscalendar/js/jquery.eventCalendar.js");
	$doc->addStyleSheet(JURI::base() . "media/com_jeventscalendar/css/paragridma.css");
	$doc->addStyleSheet(JURI::base() . "media/com_jeventscalendar/css/eventCalendar.css");
	$doc->addStyleSheet(JURI::base() . "media/com_jeventscalendar/css/eventCalendar_theme_responsive.css");
?>

<?php 
	//var_dump($this->msg);
	date_default_timezone_set('America/Mexico_City');
	//$date = new DateTime($this->msg['date_from']); 
	$fechainicio = strtotime($this->msg['date_from'])*1000; 
	$fechafinal = strtotime($this->msg['date_to'])*1000; 

	$id = $this->msg['id'];
	$titulo = $this->msg['title'];
	$descripcion = $this->msg['description'];
	$link = $this->msg['link'];
	$lugar = $this->msg['lugar'];
	//var_dump($datetimestamp);
?>

<div class="row">
	<h2 class="h4">Calendario</h2>
	<div class="g6" style="width:45%;">
		<div style="text-align: center;
		    background-color: rgba(214, 214, 214, 0.32);
		    border-radius: 10px;"><?php echo $this->msg['date_from']; ?> </div>
		<div style="text-align: center;
		    font-size: 20px;
		    color: #BD0000;
		    position: relative;
		    top: 10px;
		    text-decoration: underline;"><?php echo $titulo; ?> </div>
		<div style="position: relative;
		    top: 20px;
		    width: 60%;
		    text-align: center;
		    background-color: #FDFDFD;
		    margin: 0 auto; font-family: sans-serif;"><?php echo $descripcion; ?> </div>
		<div style="position: relative;
		    top: 40px;
		    width: 80%;
		    text-align: center;
		    background-color: #FAFAFF;
		    margin: 0 auto; padding: 5px;
	    	font-family: serif;
	    	color: #B7BBC7;"><?php echo $lugar; ?> </div>
		<div style="position: relative;
		    top: 45px;
		    width: 30%;
		    text-align: center;
		    background-color: #C0EAF3;
		    margin: 0 auto;
		    padding: 1px;
		    font-family: serif;
		    color: #B7BBC7;
		    border-radius: 10px;
		    border-right: 1px solid #7FB9B3;
		    border-bottom: 1px solid #7FB9B3;
		    font-size: 12px;"><a href="<?php echo $link; ?>" target="_blank"> Mas infomación</a></div>
	</div>
	<div class="g6" style="width:45%;">
		<div id="eventCalendarHumanDate"></div>
		<script>
			$(document).ready(function(){
				var eventsInline = <?php
echo '[';
	echo '	{ "date": "'.$fechainicio.'", "type": "meeting", "title": "'.$titulo.'", "description": "'.$descripcion.'", "url": "'.JURI::base().'index.php?option=com_jeventscalendar&view=jeventscalendar&id='.$id.'" },';
	foreach ($this->msg['items'] as $row) {
		$fini = strtotime($row->date_from)*1000;
		$url = JURI::base().'index.php?option=com_jeventscalendar&view=jeventscalendar&id='.$row->id;
		echo '{ "date": "'.$fini.'", "type": "meeting", "title": "'.$row->title.'", "description": "'.$row->description.'", "url": "'.$url.'" },';
	}
echo ']';
?>

				$("#eventCalendarHumanDate").eventCalendar({
				  	jsonData: eventsInline,
				  	openEventInNewWindow: true,
				  	locales: {
					    locale: "es",
						monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
							"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
						dayNames: [ 'Domingo','Lunes','Martes','Miércoles',
							'Jueves','Viernes','Sabado' ],
						dayNamesShort: [ 'Dom','Lun','Mar','Mie', 'Jue','Vie','Sab' ],
						txt_noEvents: "No hay eventos para este periodo",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: "eventos:",
						txt_next: "siguiente",
						txt_prev: "anterior",
						txt_NextEvents: "Próximos eventos:",
						txt_GoToEventUrl: "Ir al evento",
						moment: {
					        "months" : [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
					                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
					        "monthsShort" : [ "Ene", "Feb", "Mar", "Abr", "May", "Jun",
					                "Julio", "Ago", "Sep", "Oct", "Nov", "Dic" ],
					        "weekdays" : [ "Domingo","Lunes","Martes","Miércoles",
					                "Jueves","Viernes","Sabado" ],
					        "weekdaysShort" : [ "Dom","Lun","Mar","Mie",
					                "Jue","Vie","Sab" ],
					        "weekdaysMin" : [ "Do","Lu","Ma","Mi","Ju","Vi","Sa" ],
					        "longDateFormat" : {
					            "LT" : "H:mm",
					            "LTS" : "LT:ss",
					            "L" : "DD/MM/YYYY",
					            "LL" : "D [de] MMMM [de] YYYY",
					            "LLL" : "D [de] MMMM [de] YYYY LT",
					            "LLLL" : "dddd, D [de] MMMM [de] YYYY LT"
					        },
					        "week" : {
					            "dow" : 1,
					            "doy" : 4
					        }
					    }
					  }				
				}); 
			});
		</script>
	</div>
</div>
