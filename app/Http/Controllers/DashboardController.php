<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;

use DB;

class DashboardController extends Controller
{
      public function index(){

      	return view('index');
      }


      public function event(){

       $client_source=DB::table('client_source')->get();
       $data['client_source']= $client_source;

      //customer list for order
  
       $customer_list1=customer::orderBy('id', 'DESC')->get();
       $data['client_list1']= $customer_list1;

       
       $order_type=DB::table('order_type')->get();
       $data['order_type']= $order_type;

       $order_list=DB::table('order_list')->orderBy('id', 'DESC')->paginate(9);
       $data['order_list']= $order_list;


        $status_list=DB::table('status_list')->get();
       $data['status_list']= $status_list;

       $order_count=DB::table('order_list')->count();
       $data['order_count']= $order_count;

       $data_type=DB::table('data_type')->get();
       $data['data_type']= $data_type;



        $employee=DB::table('employee_list')->get();
        $data['employee']= $employee;


        $culling_employee=DB::table('emp_designation')->where('designation_id',2)->get();
        $data['culling_employee']=$culling_employee;


        $anchor_employee=DB::table('emp_designation')->where('designation_id',3)->get();
        $data['anchor_employee']=$anchor_employee;

        $checking_employee=DB::table('emp_designation')->where('designation_id',4)->get();
        $data['checking_employee']=$checking_employee;

        $editing_employee=DB::table('emp_designation')->where('designation_id',1)->get();
        $data['editing_employee']=$editing_employee;



        $employee_designation=DB::table('emp_designation')->get();
        $data['employee_designation']=$employee_designation;





       return view('event',$data);

      }

      public function customerdata(){

       $client_source=DB::table('client_source')->get();

       $data['client_source']= $client_source;


       //customer list for order
  
       $customer_list1=customer::orderBy('id', 'DESC')->get();
       $data['client_list1']=  $customer_list1;


       $customer_list=customer::orderBy('id', 'DESC')->paginate(12);

       $data['client_list']= $customer_list;

         $order_type=DB::table('order_type')->get();
       $data['order_type']= $order_type;

        $data_type=DB::table('data_type')->get();
       $data['data_type']= $data_type;


       return view('customerdata',$data);

      }


      public function employee(){


       $client_source=DB::table('client_source')->get();
       $data['client_source']= $client_source;

            
        $designation=DB::table('designation')->get();
        $data['designation']= $designation;

         //customer list for order
  
        $customer_list1=customer::orderBy('id', 'DESC')->get();
        $data['client_list1']=  $customer_list1;


        $employee=DB::table('employee_list')->orderBy('id', 'DESC')->paginate(12);
        $data['employee']= $employee;


        $order_type=DB::table('order_type')->get();
        $data['order_type']= $order_type;

         $data_type=DB::table('data_type')->get();
       $data['data_type']= $data_type;

        $employee_designation=DB::table('emp_designation')->get();
        $data['employee_designation']=$employee_designation;



         return view('employee',$data);


      }
}
