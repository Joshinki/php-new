<?php
	class Page {
	
		function showNavigation() {
			include 'src/navigation.php';
		}
		
		function view($page) {
			switch(strtolower($page)):
				case 'create_invoice':
					include 'src/create_invoice.php';
					break;
				case 'view_invoice':
					include 'src/view_invoice.php';
					break;
				case 'address_book':
					include 'src/address_book.php';
					break;
			endswitch;
		}
		
		function viewHomepage() {
			include 'src/homepage.php';
		}
	
	}