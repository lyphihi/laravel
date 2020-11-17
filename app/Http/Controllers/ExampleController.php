<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function hello() {
        return view('example.xinchao');
    }
    public function goodbye() {
        return 'Tam biet';
    }
    public function homnay() {
        $ketqua = 5;
        $hoten = 'lyphihi';
        return view('example.ngayhomnay')
            ->with('ketqua',$ketqua)
            ->with('hoten',$hoten);
    }
}
