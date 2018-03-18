<?php
namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

    public function new_print(Request $request){
        if(!$request->isMethod('post')){
            $contragents = DB::table('users')->get();
            return view('new_print', ['contragents'=>$contragents]);
        }else{
            $input = $request->all();
            var_dump($input);
        }

    }

    public function full_report(){

    }
}