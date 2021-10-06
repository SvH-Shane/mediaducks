<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegularPagesController extends Controller
{
	public function getIndex() {


		return view('pages.index');
	}
}
