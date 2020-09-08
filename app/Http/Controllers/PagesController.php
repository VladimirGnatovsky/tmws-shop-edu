<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('index')->with([
			'title' => 'Index'
		]);
    }

    public function info() {
    	return view('info')->with($this->_get_info_data());
    }

    private function _get_info_data() {
    	$styles = '';
        $title = 'Info';



    	return compact( 'styles', 'title' );
    }

    public function about() {
        return view('about')->with([
            'title' => 'About Us'
        ]);
    }
    public function contact() {
        return view('contact')->with([
            'title' => 'Contact Us'
        ]);
    }
}
