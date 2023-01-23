<?php

namespace RBS\Rbsreports;

;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RbsreportsController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('rbsreports::add', compact('result'));

    }
    public function substarct($a, $b)
    {
        $result = $a - $b;
        return view('rbsreports::add', compact('result'));

    }
}