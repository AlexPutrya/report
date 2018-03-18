<?php
namespace App\Http\Controllers\Report;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

    public function newPrintReport(Request $request){
        if(!$request->isMethod('post')){
            $contragents = DB::table('users')->get();
            return view('new_print_report', ['contragents'=>$contragents]);
        }else{
            $input = $request->all();
            $validator = Validator::make($request->all(),
            [
                'created_date' => 'required',
                'ticket_type' => 'required',
                'denomination' => 'required',
                'quantity' => 'required',
                'complex' => 'required',
                'contragent' => 'required',
                'first_ticket_num' => 'required',
                'last_ticket_num' => 'required'
            ]);

            if($validator->fails()){
                return redirect('/')
                    ->withErrors('Не все данные заполнены');
            }

            DB::table('report')->insert(
              ['create_at' => $input['created_date'],
               'ticket_type' => $input['ticket_type'],
               'denomination'=> $input['denomination'],
               'quantity' => $input['quantity'],
               'complex' => $input['complex'],
               'contragent'=> $input['contragent'],
               'first_ticket_num'=> $input['first_ticket_num'],
               'last_ticket_num'=> $input['last_ticket_num']
                  ]
            );
            var_dump($input);
        }

    }

    public function fullReport(){

    }
}