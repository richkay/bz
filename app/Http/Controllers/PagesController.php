<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{
    
	public function page(Pages $slug){

		$data = $slug;

		return view('pages.page',compact('data'));

	}


	public function article(Pages $slug){

		return $slug->title;

	}


	public function product(Pages $slug){

		return $slug->title;

	}


	public function event(Pages $slug){

		return $slug->title;

	}


}
