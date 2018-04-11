<?php
	namespace App\Http\Controllers;

	class PageController extends Controller
	{
		public function getIndex()
		{
			return view('pages.welcome');
		}

		public function getAbout()
		{
			$first = 'cookoo';
			$last = 'dubroy';

			$full = $first . ' ' . $last;
			$email = 'cookoo@';
			return view('pages.about')->with('fullname', $full)->withemail($email);
		}

		public function getContact()
		{
			return view('pages.contact');
		}

		public function postContact()
		{

		}
	}	
?>