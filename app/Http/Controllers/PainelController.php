<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index(){

        $totalUser = User::count();
        $totalRole = Role::count();
        $totalPermission = Permission::count();
        $totalNotice = Notice::count();

        return view('painel.index',compact('totalUser','totalRole','totalPermission','totalNotice'));
    }
}
