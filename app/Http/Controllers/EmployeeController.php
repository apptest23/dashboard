<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class EmployeeController extends Controller
{


    public function store_employee_data(Request $request){



		  $validator=Validator::make($request->all(),[

            'name' => 'required',
           /* 'email' => 'required|email',*/
            
          /*  'website' => 'required', */
        /*    'mobile_no' => 'required|size:10',*/
          

                   ]);

          if($validator->passes()){

             $name=$request->input('name');
          /*   $email=$request->input('email');*/
             $designation=$request->input('designation');
            /* $company_name=$request->input('company_name');*/
           /*  $mobile_no=$request->input('mobile_no');*/
             $Address=$request->input('Address');


                $employee=DB::table('employee_list')->insert(['employee_name'=>$name,'Address'=>$Address]);

                $letest_emp_id=DB::table('employee_list')->max('id');

                foreach ($designation as $value) {

                    DB::table('emp_designation')->insert(['emp_id'=>$letest_emp_id,'designation_id'=>$value]);
                  
                  }



                 $employee=DB::table('employee_list')->orderBy('id', 'DESC')->paginate(12);

                 $total_row = $employee->count();

                 $employee_designation=DB::table('emp_designation')->get();

                 $designation=DB::table('designation')->get();

                 $output='';


                   if($total_row > 0){
                         foreach($employee as $row) {

             $output .= '<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items employee_'.$row->id.'">
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
                                                <a class="dropdown-item" onclick="delete_employee('.$row->id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_employee_data('.$row->id.')">Edit</a>
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
                                        <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$row->employee_name.'</a></h6>';

                                  /*  if($row->designation==1){

                                    	 $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Editor</p>';


                                    }elseif($row->designation==2){

                                    	 $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Culling</p>';


                                    }elseif($row->designation==3){

                                    	 $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Anchor</p>';


                                    }elseif($row->designation==4){


                                    	 $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Checker</p>';

                                    	
                                    }*/

                                    foreach($employee_designation as $ed){


                                          if($ed->emp_id ==$row->id){


                                            foreach($designation as $d){


                                               if($d->id == $ed->designation_id){

                                             $output .='<span class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$d->name. '</span>';

                                            }



                                            }


                                          }

                                       }




                                        $output .= '<ul>
                                            <li><a href="tel:"><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href="mailto:"><i class="fas fa-envelope"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
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


	 public function delete_employee($id){


          $list=DB::table('employee_list')->where('id',$id)->get();
          $image=$list[0]->image;

          if($image!='')
          {
               unlink(public_path('/uploads/'.$image));
          }

           DB::table('employee_list')->where('id',$id)->delete();

          return response()->json(['success'=>'Blog data deleted successfully!!!']);
         

            }



      	public function update_employee_data($id){

          $designation=DB::table('designation')->get();

          $data['designation']= $designation;

           $employee_designation=DB::table('emp_designation')->where('emp_id',$id)->get();

           $data['employee_designation']=$employee_designation;

          
     	  $employee=DB::table('employee_list')->where('id',$id)->get();
 
          $data['employee_name']=$employee[0]->employee_name;
          $data['Address']=$employee[0]->Address;
          $data['employee_id']=$employee[0]->id;
          $data['image']=$employee[0]->image;

         return response()->json([
                 'data' => $data
            ]);
 

      	}


    public function store_update_employee_data(Request $request,$id){


            $validator=Validator::make($request->all(),[
  
                  'name' => 'required',
               /*   'email' => 'required|email',
                  'company_name' => 'required',
                  'website' => 'required', 
                  'mobile_no' => 'required|size:10',*/
          

             ]);

        if($validator->passes()){

             $name=$request->input('name');
           /*  $email=$request->input('email');*/
             $designation=$request->input('designation');
             /*$company_name=$request->input('company_name');
             $mobile_no=$request->input('mobile_no');*/
             $Address=$request->input('Address');
             $image=$request->input('oldimage');

             $id=$id;

             $output='';





         /*
        $customer=customer::where('id',$id)->update(['client_name'=>$name,'email'=>$email,'company_name'=>$company_name,'mobile_no'=>$mobile_no,'website'=>$website,'client_source'=>$client_source]);*/


         $update_employee=DB::table('employee_list')->where('id',$id)->update(['employee_name'=>$name,'Address'=>$Address,'designation'=>$designation]);



            $employee_designation_count=DB::table('emp_designation')->where('emp_id',$id)->delete();

                foreach($designation as $value) {

               
                     DB::table('emp_designation')->insert(['emp_id'=>$id,'designation_id'=>$value]);     
                   
                  
                  }



          $employee_designation=DB::table('emp_designation')->get();

                 $designation1=DB::table('designation')->get();

      

            if($update_employee){

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
                                                <a class="dropdown-item" onclick="delete_employee('.$id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_employee_data('.$id.')">Edit</a>
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
                                      <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$name.'</a></h6>';

                                      foreach($employee_designation as $ed){


                                          if($ed->emp_id ==$id){


                                            foreach($designation1 as $d){


                                               if($d->id == $ed->designation_id){

                                             $output .='<span class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$d->name. '</span>';

                                            }



                                            }


                                          }

                                       }
                                            

                                       $output .= '<ul>
                                            <li><a href=""><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href=""><i class="fas fa-envelope"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
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


      public function search_employee(Request $request){

         	$text = $request->input('text');



         if($text !=''){

          $search_result=DB::table('employee_list')->orwhere('employee_name', 'like', '%' . $text . '%')->orWhere('email', 'like', '%' . $text . '%')->orderBy('id', 'DESC')->paginate(12);
                                                 
                                                

        }else{


        	   $search_result=DB::table('employee_list')->orderBy('id', 'DESC')->paginate(12);

        }

                

          $total_row = $search_result->count();

            $employee_designation=DB::table('emp_designation')->get();

                 $designation=DB::table('designation')->get();

                 $output='';


      if($total_row > 0)
      {
        foreach($search_result as $row)
      {
           $output .= '<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items employee_'.$row->id.'">
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
                                                <a class="dropdown-item" onclick="delete_employee('.$row->id.')">Delete</a>
                                                <a class="dropdown-item" onclick="update_employee_data('.$row->id.')">Edit</a>
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
                                        <h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">'.$row->employee_name.'</a></h6>';

                                  /*  if($row->designation==1){

                                         $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Editor</p>';


                                    }elseif($row->designation==2){

                                         $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Culling</p>';


                                    }elseif($row->designation==3){

                                         $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Anchor</p>';


                                    }elseif($row->designation==4){


                                         $output .='<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Checker</p>';

                                        
                                    }*/

                                    foreach($employee_designation as $ed){


                                          if($ed->emp_id ==$row->id){


                                            foreach($designation as $d){


                                               if($d->id == $ed->designation_id){

                                             $output .='<span class="fs-14 mb-3 user-work" data-occupation="UI Designer">'.$d->name. '</span>';

                                            }



                                            }


                                          }

                                       }




                                        $output .= '<ul>
                                            <li><a href="tel:"><i class="fas fa-phone-alt"></i></a></li>
                                            <li><a href="mailto:"><i class="fas fa-envelope"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
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
