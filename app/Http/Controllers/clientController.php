<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\customer;
use DB;

class clientController extends Controller
{

	public function store_client_data(Request $request){



		  $validator=Validator::make($request->all(),[

            'name' => 'required',
           /* 'email' => 'required|email',*/
            'company_name' => 'required',
           /* 'website' => 'required', 
            'mobile_no' => 'required|size:10',*/
          

        ]);

        if($validator->passes()){

             $name=$request->input('name');

             echo  $name ;



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

             $output .= '<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items client_'.$row->id.'">
                              <div class="card contact-bx item-content">
                                <div class="card-header border-0">
                                    <div class="action-dropdown">
                                        <div class="dropdown ">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" onclick="delete_client('.$row->id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_client_data('.$row->id.')">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body user-profile">
                                    <div class="image-bx">';


                                    if($row->image==''){

                                         $output .='<img src="uploads/dummy.png" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }else{

                                            
                                              $output .='<img src="uploads/'.$row->image.'" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }



                                   $output .='<span class="active"></span>
                                    </div>
                                    <div class="media-body user-meta-info">
                                        <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$row->client_name.'</a></h6>
                                        <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$row->company_name.'</p>
                                        <ul>
                                            <li><a href="tel:'.$row->mobile_no.'"><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href="mailto:'.$row->email.'"><i class="fas fa-envelope"></i></a></li>
                                            <li><a href="'.$row->website.'"><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>';

                            }

                  
         
                            }else{
                         
                            $output .='<h3> Client data is not available...</h3>';
         
                           } 
         

                       return response($output);

                 }else{

              return response()->json(['error'=>$validator->errors()]);

        }


	 }



	public function delete_client($id){


          $list=customer::where('id',$id)->get();
          $image=$list[0]->image;

          if($image!='')
          {
               unlink(public_path('/uploads/'.$image));
          }

           customer::where('id',$id)->delete();

          return response()->json(['success'=>'Blog data deleted successfully!!!']);
         

     	}

     	public function update_client_data($id){

         $client_source1=DB::table('client_source')->get();

         $data['client_source_arr']=$client_source1;

     	  $client=customer::where('id',$id)->get();

          $data['client_source']=$client[0]->client_source;
          $data['client_name']=$client[0]->client_name;
          $data['company_name']=$client[0]->company_name;
          $data['mobile_no']=$client[0]->mobile_no;
          $data['email']=$client[0]->email;
          $data['website']=$client[0]->website;
          $data['client_id']=$client[0]->id;
          $data['image']=$client[0]->image;

         return response()->json([
                 'data' => $data
            ]);
 

      	}

      	public function store_update_client_data(Request $request,$id){


      		 $validator=Validator::make($request->all(),[

            'name' => 'required',
            /*'email' => 'required|email',*/
            'company_name' => 'required',
        /*    'website' => 'required', 
            'mobile_no' => 'required|size:10',*/
          

        ]);

        if($validator->passes()){

             $name=$request->input('name');
             $email=$request->input('email');
             $client_source=$request->input('client_source');
             $company_name=$request->input('company_name');
             $mobile_no=$request->input('mobile_no');
             $website=$request->input('website');
             $image=$request->input('oldimage');

             $id=$id;

             $output='';

/*
        $customer=customer::where('id',$id)->update(['client_name'=>$name,'email'=>$email,'company_name'=>$company_name,'mobile_no'=>$mobile_no,'website'=>$website,'client_source'=>$client_source]);*/


                 $update_client=DB::table('client_list')->where('id',$id)->update(['client_name'=>$name,'email'=>$email,'company_name'=>$company_name,'mobile_no'=>$mobile_no,'website'=>$website,'client_source'=>$client_source]);


                 if($update_client){

                       
                          $output .= '
                              <div class="card contact-bx item-content">
                                <div class="card-header border-0">
                                    <div class="action-dropdown">
                                        <div class="dropdown ">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" onclick="delete_client('.$id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_client_data('.$id.')">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body user-profile">
                                    <div class="image-bx">';


                                      
                                    if($image==''){

                                         $output .='<img src="uploads/dummy.png" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }else{

                                            
                                              $output .='<img src="uploads/'.$image.'" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }


                                    

                                  $output .='<span class="active"></span>
                                    </div>
                                    <div class="media-body user-meta-info">
                                      <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$name.'</a></h6>
                                        <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$company_name.'</p>
                                        <ul>
                                            <li><a href="tel:'.$mobile_no.'"><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href="mailto:'.$email.'"><i class="fas fa-envelope"></i></a></li>
                                            <li><a href="'.$website.'"><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           ';

                      return response($output);

                     }else{

                       return response()->json(['status'=>201]);


                     }
     

                 }else{

              return response()->json(['error'=>$validator->errors()]);



              }

      	}

         public function search_client(Request $request){

          $text = $request->input('text');



         if($text !=''){

          $search_result=DB::table('client_list')->orwhere('client_name', 'like', '%' . $text . '%')->orWhere('email', 'like', '%' . $text . '%')->orderBy('id', 'DESC')->paginate(12);
                                                 
                                                

        }else{


             $search_result=DB::table('client_list')->orderBy('id', 'DESC')->paginate(12);

        }

                

          $total_row = $search_result->count();

          $output='';


      if($total_row > 0)
      {
        foreach($search_result as $row)
      {
          $output .= '<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items client_'.$row->id.'">
                              <div class="card contact-bx item-content">
                                <div class="card-header border-0">
                                    <div class="action-dropdown">
                                        <div class="dropdown ">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                    <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" onclick="delete_client('.$row->id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_client_data('.$row->id.')">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body user-profile">
                                    <div class="image-bx">';


                                    if($row->image==''){

                                         $output .='<img src="uploads/dummy.png" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }else{

                                            
                                              $output .='<img src="uploads/'.$row->image.'" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">';

                                        }



                                   $output .='<span class="active"></span>
                                    </div>
                                    <div class="media-body user-meta-info">
                                        <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$row->client_name.'</a></h6>
                                        <p class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$row->company_name.'</p>
                                        <ul>
                                            <li><a href="tel:'.$row->mobile_no.'"><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href="mailto:'.$row->email.'"><i class="fas fa-envelope"></i></a></li>
                                            <li><a href="'.$row->website.'"><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

               }
             else
          {
      
             $output .='<h3> Search data is not available...</h3>';

          }  
           return response($output);
         }
       

    
}
