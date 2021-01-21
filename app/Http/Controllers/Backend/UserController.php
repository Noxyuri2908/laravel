<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	return 'Here to manage Users!';
    }
    public function create(){
    	return view('backend.user.create');
    }
    public function store(Request $Request){
    	dd($Request->all());
    }
    public function update(Request $Request){
    	dd($Request->all());
    }
}
