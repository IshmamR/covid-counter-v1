<?php
	include('html-dom/simple_html_dom.php');

	$a = array();

	$website = ('https://www.worldometers.info/coronavirus/?utm_campaign=homeAdvegas1?');

	$html = file_get_html($website);

	foreach ($html->find('.maincounter-number') as $divNum) {
		foreach ($divNum->find('span') as $span) {
			$a[] = strip_tags($span);
		}
	}

	$cases = $a[0];
	$deaths = $a[1];
	$recovs = $a[2];
	
?>