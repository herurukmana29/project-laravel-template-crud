<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\perpus;
use App\buku;

class admincontroller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

    	return view ('/admin/index');
    }

    public function messages()
    {
    	return view ('admin/messages');
    }

    public function tasks()
    {
    	return view ('admin/tasks');
    }

    public function ui()
    {
    	return view ('admin/ui');
    }

    public function widgets()
    {
    	return view ('admin/widgets');
    }

    public function submenu()
    {
    	return view ('admin/submenu');
    }

    public function submenu2()
    {
    	return view ('admin/submenu2');
    }

    public function submenu3()
    {
    	return view ('admin/submenu3');
    }

    public function form()
    {
    	return view ('admin/form');
    }

    public function charts()
    {
    	return view ('admin/charts');
    }

    public function typography()
    {
    	return view ('admin/typography');
    }

    public function gallery()
    {
    	return view ('admin/gallery');
    }

    public function tables()
    {
        $anggota=perpus::all();
        $buku=buku::all();
      //dd($blogs);
        return view ('admin/tables', ['anggota' => $anggota, 'buku' => $buku]);
    	
    }

    public function calendar()
    {
    	return view ('admin/calendar');
    }

    public function filemanager()
    {
    	return view ('admin/file-manager');
    }

    public function icons()
    {
    	return view ('admin/icons');
    }

    public function login()
    {
    	return view ('admin/login');
    }
}
