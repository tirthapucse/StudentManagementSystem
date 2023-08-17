<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\datatable;
use App\Models\admin;
use App\Models\teacher;
use App\Models\student;


class Controller extends BaseController
{

    
    public function datatable(){
        $data = datatable::all();
        // dd($data);
        return view('datatable',compact('data',));
    }
    public function admin(){
        $admin = admin::all();
        // dd($data);
        return view('admin',compact('admin'));
    }
    public function teacher(){
        $teacher = teacher::all();
        // dd($data);
        return view('teacher',compact('teacher'));
    }
    public function student(){
        $student = student::all();
        // dd($data);
        return view('student',compact('student'));
    }

    use AuthorizesRequests, ValidatesRequests;
}


// ['datatables'=>$datatable]
// compact('data')