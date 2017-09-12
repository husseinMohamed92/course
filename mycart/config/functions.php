<?php
			
		 function cleanText($text){
				$clean = trim($text);
				$clean = htmlspecialchars($clean);
				$clean = strip_tags($clean);
				return $clean;
		}
?>