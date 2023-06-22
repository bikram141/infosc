<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Physician;
use App\Imports\PhysicianImport;
use App\Exports\PhysicianExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PhysicianController extends Controller
{
    public function index(){
        return view('form');
    }
    public function list(){
        $physician=Physician::get();
        return view('list',['physician'=>$physician]);
    }
    public function import(Request $request){
        Excel::import(new PhysicianImport,
        $request->file('file'));
return redirect()->back();
    }
    public function export(){
      return Excel::download(new PhysicianExport,'physicians.csv');

    }
}
