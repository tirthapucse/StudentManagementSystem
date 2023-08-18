<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function create() {

        return view('create');
    }

    public function store(Request $request){
        
        
        // validiation for required things in form
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'company' => 'required',
        //     'designation' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        // ]);


        $imageName = time().'.'.request()->file('image')->extension();
        request()->image->move(public_path('images'), $imageName);

        $admin = new admin();
        $admin->image = $imageName;
        $admin->name = $request->name;
        $admin->designation = $request->designation;
        $admin->email = $request->email;
        $admin->company_name = $request->company;


        $admin->save();
        return back()->withSuccess('Product Successfully Created!!!!'); 

    }
}
