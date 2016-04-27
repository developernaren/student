<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
	
class SiteController extends Controller
{
    
    function index() {

    	return view('users.list');
    }

    function show() {

    	return view('users.detail');
    }


    function edit() {

    	return view('users.edit');
    }

    function update() {

    }

    function create() {

    }

    function store() {

    }


}
