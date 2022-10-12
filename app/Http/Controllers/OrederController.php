<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class OrederController extends Controller
{

 public function store_order_data(Request $request){


		  $validator=Validator::make($request->all(),[

            'client_source' => 'required',
            'client_name' => 'required',
            'bride_groom_name' => 'required'
            'number_of_image' => 'required', 
            'order_type' => 'required',
          
        

        ]);


        if($validator->passes()){

             $name=$request->input('name');
             $email=$request->input('email');
             $client_source=$request->input('client_source');
             $company_name=$request->input('company_name');
             $mobile_no=$request->input('mobile_no');
             $website=$request->input('website');


                $customer=customer::insert(['client_name'=>$name,'email'=>$email,'company_name'=>$company_name,'mobile_no'=>$mobile_no, 'website'=>$website, 'client_source'=>$client_source]);


                 $customer_list=customer::orderBy('id', 'DESC')->paginate(12);


                 $total_row = $customer_list->count();

                 $output='';


                    if($total_row > 0){
                         foreach($customer_list as $row) {

        
                            }

            
                            }else{
                         
                            $output .='<h3> Client data is not available...</h3>';
         
                           } 
         

                       return response($output);

                 }else{

              return response()->json(['error'=>$validator->errors()]);

        }
    }
}
