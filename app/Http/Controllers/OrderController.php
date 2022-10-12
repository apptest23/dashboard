<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\customer;
use DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function store_order_data(Request $request){


    	 $validator=Validator::make($request->all(),[

           
            'client_source' => 'required',
            'client_name' => 'required',
            'order_name' => 'required',
            'number_of_image' => 'required', 
            'order_type' => 'required',
          

            ]);

           if($validator->passes()){

             $client_source=$request->input('client_source');
             $client_name=$request->input('client_name');
             $order_name=$request->input('order_name');
             $number_of_image=$request->input('number_of_image');
             $order_type=$request->input('order_type');
             $type_of_data=$request->input('type_of_data');
             $client_edited=$request->input('client_edited');
             $number_of_edit=$request->input('number_of_edit');


            

              $date =Carbon::now()->format('Y-m-d');

              $created_at=Carbon::now();

              if($order_type==1 || $order_type==3 ){


              
                     $status=1; 

                     $current_status='A waiting assign For Culling';





                 }else{


                   if($client_edited==1){
 
                      $status=5;

                      $current_status='A Wating assine For Editor';

                    }else{

                         $status=3;

                         $current_status='A Wating assine to Editor for Anchor';



                    }


                   }



             $order=DB::table('order_list')->insert(['order_date'=>$date,'source'=>$client_source,'customer'=>$client_name,'order_name'=>$order_name,'status'=>$status, 'order_type'=>$order_type, 'number_of_image'=>$number_of_image,'data_type'=>$type_of_data,'client_editor'=>$client_edited, 'current_status'=>$current_status,'edit_image'=>$number_of_edit,'created_at'=>$created_at]);


                     $order_list=DB::table('order_list')->orderBy('id', 'DESC')->paginate(9);



                     $client_source=DB::table('client_source')->get();
                     $client_list1=customer::orderBy('id', 'DESC')->get();

                     $order_type=DB::table('order_type')->get();

                     $status_list=DB::table('status_list')->get();
    

                    $total_row = $order_list->count();


         

                    $output='';

                      if($total_row > 0){
                          foreach($order_list as  $key =>$row) {

                              $sr_no=$key+1;




                                    $date1=date('Ymdhm', strtotime($row->created_at));

                                  



                            


                                       $output .= '<tr>
                                                <td><span class="text-nowrap">'.$date1.'<span></span>'.$sr_no.'<span> <br> <span>'.$row->order_date.'</span></td>';

                                                foreach($client_source as $cs){

                                                  if($cs->id== $row->source){

                                                    $output .='<td><span class="text-nowrap">'.$cs->name.'</span></td>';

                                                      }

                                                    
                                                   }

                                                 foreach($client_list1 as $cl){

                                                    if($cl->id== $row->customer){

                                                      $output .= '<td>'.$cl->client_name.'<br>'.$row->order_name.'</td>';


                                                     }

                                                 }    

                                                    foreach($order_type as $ot){

                                                    if($ot->id==$row->order_type){

                                                     $output .='<td>'.$ot->name.'</td>';

                                                     }
 
                                                  }



            
                                            $output .='<td>'.$row->number_of_image.'</td>';

                                             


                                                 foreach($status_list as $sl){

                                                    if($sl->id== $row->status){

                                                        $output .='<td class="dot-status" id="status_'.$row->id.'"><span class="status_btn status_btn'.$row->id.'"style="background-color:'.$sl->colour.'">'.$sl->name.'</span>

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
                                                                  <a class="dropdown-item" onclick="update_status('.$row->id.')">Update</a>
                                                                  <a class="dropdown-item" onclick="edit_status_data('.$row->id.')">Edit</a>
                                                                  </div>
                                                             </div>
                                                          </div>
                                                         </td>';

                                                      }
   
                                                   }
                                            
                                                 $output .='<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
                                             </tr>';   

                                             } 
                                        
          
                                  }else{
                         
                                 $output .='<h3> Order data is not available...</h3>';
         
                           } 
         

                       return response($output);

                 }else{

              return response()->json(['error'=>$validator->errors()]);

        }
    }


     public function open_update_menu($id){

         $order_id=$id;


         $order_list=DB::table('order_list')->where('id',$id)->get();

         $order_type= $order_list[0]->order_type;

         $order_name= $order_list[0]->order_name;

         $status=$order_list[0]->status;

         $data_type=$order_list[0]->data_type;

         $total_image=$order_list[0]->number_of_image;

         $edit_image=$order_list[0]->edit_image;

          $client_editor=$order_list[0]->client_editor;

       
         $employee=DB::table('employee_list')->where('designation',2)->get();

           if($order_type==3){


                     if($status==1){


                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['employee']=$employee;

                        $data['status']=$status;


                         return response($data);
                    
           
                        }else if($status==2){


                           $total_image1=DB::table('status1_db')->where('order_id',$order_id)->get();

                           $total_image=$total_image1[0]->selcted_image;

                            $data['total_image']=$total_image;

                            $data['order_id']=$order_id;

                            $data['order_name']=$order_name;

                            $data['status']=$status;

                             return response($data);


                        }else if($status==8){

                            $total_image1=DB::table('status2_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->selected_image;


                            $data['order_id']=$order_id;

                            $data['order_name']=$order_name;

                            $data['status']=$status;

                            $data['total_image']=$total_image;

                            return response($data);



                        }else if($status==9){


                            $total_image1=DB::table('status2_db')->where('order_id',$order_id)->get();

                            $total_image=$total_image1[0]->selected_image;

                            $data['total_image']=$total_image;

                            $data['order_id']=$order_id;

                            $data['order_name']=$order_name;

                            $data['status']=$status;


                            return response($data);


                        }else if($status==10){




                             $total_image1=DB::table('status89_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                              return response($data);


                        }else if($status==11){


                             $total_image1=DB::table('status10_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                              return response($data);


                        }else if($status==12){


                             $total_image1=DB::table('status11_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                             $data['data_type']=$data_type;

                               
                             return response($data);


                        }



       }else if($order_type==2 && $client_editor==0){

          //  echo(56789);

                  if($status==3){

                 

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;
       
                         $data['status']=$status;


                         return response($data);
                
       
                    }else if($status==4){

                      

                       $data['total_image']=$total_image;

                       $data['order_id']=$order_id;

                       $data['order_name']=$order_name;

                        $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==6){

                           


                    $editing_image1=DB::table('status4_db')->where('order_id',$order_id)->get();

                    $total_edit_image=$editing_image1[0]->editing_image;


                    $data['total_image']=$total_image;

                    $data['order_id']=$order_id;

                    $data['order_name']=$order_name;

                    $data['total_edit_image']=$total_edit_image;

                    $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==7){

                  

                          $editing_image1=DB::table('status6_db')->where('order_id',$order_id)->get();

                          $total_image_for_check=$editing_image1[0]->selected_image;


                          $data['total_image']=$total_image;

                          $data['order_id']=$order_id;

                          $data['order_name']=$order_name;

                          $data['total_image_for_check']=$total_image_for_check;

                          $data['status']=$status;

                          return response($data);
                      
       
                  }else if($status==8){

                          

                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                         $total_image_2=$total_image1[0]->selected_image;


                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;

                        $data['total_image']=$total_image_2;

                        return response($data);



                    }else if($status==9){


                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                        $total_image=$total_image1[0]->selected_image;

                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;


                        return response($data);


                    }else if($status==10){

           

                         $total_image1=DB::table('status89_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['status']=$status;


                        return response($data);


                    }else if($status==11){

                           
                             $total_image1=DB::table('status10_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                         return response($data);

                   }else if($status==12){

                      


                         $total_image1=DB::table('status11_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['data_type']=$data_type;

                           
                         return response($data);


                 }
   
       }else if($order_type==2 && $client_editor==1){


                if($status==5){

                   $data['total_image']=$total_image;

                   $data['order_id']=$order_id;

                   $data['order_name']=$order_name;

                   $data['status']=$status;

                   $editing_image=$total_image-$edit_image;

                   $data['editing_image']=$editing_image;
       

                   return response($data);
       
                 }else if($status==6){

                           
                    $editing_image1=DB::table('status5_db')->where('order_id',$order_id)->get();

                    $total_edit_image=$editing_image1[0]->editing_image;


                    $data['total_image']=$total_image;

                    $data['order_id']=$order_id;

                    $data['order_name']=$order_name;

                    $data['total_edit_image']=$total_edit_image;

                    $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==7){

                  

                          $editing_image1=DB::table('status6_db')->where('order_id',$order_id)->get();

                          $total_image_for_check=$editing_image1[0]->selected_image;


                          $data['total_image']=$total_image;

                          $data['order_id']=$order_id;

                          $data['order_name']=$order_name;

                          $data['total_image_for_check']=$total_image_for_check;

                          $data['status']=$status;

                          return response($data);
                      
       
                  }else if($status==8){

                          

                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                         $total_image_2=$total_image1[0]->selected_image;


                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;

                        $data['total_image']=$total_image_2;

                        return response($data);



                    }else if($status==9){


                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                        $total_image=$total_image1[0]->selected_image;

                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;


                        return response($data);


                    }else if($status==10){

           

                         $total_image1=DB::table('status89_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['status']=$status;


                        return response($data);


                    }else if($status==11){

                           
                             $total_image1=DB::table('status10_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                         return response($data);

                   }else if($status==12){

                      


                         $total_image1=DB::table('status11_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['data_type']=$data_type;

                           
                         return response($data);


                 }


       }else if($order_type==1 && $client_editor==0){



               if($status==1){


                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['employee']=$employee;

                        $data['status']=$status;


                         return response($data);
                    
           
                        }else if($status==2){




                           $total_image1=DB::table('status1_db')->where('order_id',$order_id)->get();

                           $total_image=$total_image1[0]->selcted_image;

                            $data['total_image']=$total_image;

                            $data['order_id']=$order_id;

                            $data['order_name']=$order_name;

                            $data['status']=$status;

                             return response($data);


                        }
                  if($status==3){

                 

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;
       
                         $data['status']=$status;


                         return response($data);
                
       
                    }else if($status==4){

                      

                       $data['total_image']=$total_image;

                       $data['order_id']=$order_id;

                       $data['order_name']=$order_name;

                        $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==6){

                           


                    $editing_image1=DB::table('status4_db')->where('order_id',$order_id)->get();

                    $total_edit_image=$editing_image1[0]->editing_image;


                    $data['total_image']=$total_image;

                    $data['order_id']=$order_id;

                    $data['order_name']=$order_name;

                    $data['total_edit_image']=$total_edit_image;

                    $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==7){

                  

                          $editing_image1=DB::table('status6_db')->where('order_id',$order_id)->get();

                          $total_image_for_check=$editing_image1[0]->selected_image;


                          $data['total_image']=$total_image;

                          $data['order_id']=$order_id;

                          $data['order_name']=$order_name;

                          $data['total_image_for_check']=$total_image_for_check;

                          $data['status']=$status;

                          return response($data);
                      
       
                  }else if($status==8){

                          

                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                         $total_image_2=$total_image1[0]->selected_image;


                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;

                        $data['total_image']=$total_image_2;

                        return response($data);



                    }else if($status==9){


                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                        $total_image=$total_image1[0]->selected_image;

                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;


                        return response($data);


                    }else if($status==10){

           

                         $total_image1=DB::table('status89_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['status']=$status;


                        return response($data);


                    }else if($status==11){

                           
                             $total_image1=DB::table('status10_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                         return response($data);

                   }else if($status==12){

                      


                         $total_image1=DB::table('status11_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['data_type']=$data_type;

                           
                         return response($data);


                 }



        }else if($order_type==1 && $client_editor==1){




               if($status==1){


                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['employee']=$employee;

                        $data['status']=$status;


                         return response($data);
                    
           
                        }else if($status==2){




                           $total_image1=DB::table('status1_db')->where('order_id',$order_id)->get();

                           $total_image=$total_image1[0]->selcted_image;

                            $data['total_image']=$total_image;

                            $data['order_id']=$order_id;

                            $data['order_name']=$order_name;

                            $data['status']=$status;

                             return response($data);


                        }  if($status==5){

                   $data['total_image']=$total_image;

                   $data['order_id']=$order_id;

                   $data['order_name']=$order_name;

                   $data['status']=$status;

                   $editing_image=$total_image-$edit_image;

                   $data['editing_image']=$editing_image;
       

                   return response($data);
       
                 }                 
                 else if($status==6){

                           


                    $editing_image1=DB::table('status5_db')->where('order_id',$order_id)->get();

                    $total_edit_image=$editing_image1[0]->editing_image;


                    $data['total_image']=$total_image;

                    $data['order_id']=$order_id;

                    $data['order_name']=$order_name;

                    $data['total_edit_image']=$total_edit_image;

                    $data['status']=$status;

                     return response($data);
                
       
                  }else if($status==7){

                  

                          $editing_image1=DB::table('status6_db')->where('order_id',$order_id)->get();

                          $total_image_for_check=$editing_image1[0]->selected_image;


                          $data['total_image']=$total_image;

                          $data['order_id']=$order_id;

                          $data['order_name']=$order_name;

                          $data['total_image_for_check']=$total_image_for_check;

                          $data['status']=$status;

                          return response($data);
                      
       
                  }else if($status==8){

                          

                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                         $total_image_2=$total_image1[0]->selected_image;


                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;

                        $data['total_image']=$total_image_2;

                        return response($data);



                    }else if($status==9){


                        $total_image1=DB::table('status7_db')->where('order_id',$order_id)->get();

                        $total_image=$total_image1[0]->selected_image;

                        $data['total_image']=$total_image;

                        $data['order_id']=$order_id;

                        $data['order_name']=$order_name;

                        $data['status']=$status;


                        return response($data);


                    }else if($status==10){

           

                         $total_image1=DB::table('status89_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['status']=$status;


                        return response($data);


                    }else if($status==11){

                           
                             $total_image1=DB::table('status10_db')->where('order_id',$order_id)->get();

                             $total_image=$total_image1[0]->total_image;

                             $data['total_image']=$total_image;

                             $data['order_id']=$order_id;

                             $data['order_name']=$order_name;

                             $data['status']=$status;

                         return response($data);

                   }else if($status==12){

                      


                         $total_image1=DB::table('status11_db')->where('order_id',$order_id)->get();

                         $total_image=$total_image1[0]->total_image;

                         $data['total_image']=$total_image;

                         $data['order_id']=$order_id;

                         $data['order_name']=$order_name;

                         $data['status']=$status;

                         $data['data_type']=$data_type;

                           
                         return response($data);


                 }



      }


    }
          

       /***************************status-1*******************************************/     


        public function update_status_1(Request $request,$id){


           $validator=Validator::make($request->all(),[

             'selected_image'=>'required',

            ]);

           if($validator->passes()){

            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $total_image=$request->input('total_image');

             $culling_employee=$request->input('culling_employee');
             $employee_name=DB::table('employee_list')->where('id',$culling_employee)->get();

           $employee_name1=$employee_name[0]->employee_name;

           $current_status='Proccesing in Culling with '. $employee_name1;

           $color='#FEACB7';


            $created_at=Carbon::now();

            $status=DB::table('status1_db')->insert(['order_id'=>$order_id,'culling_person'=>$employee_name1,'total_image'=>$total_image,'selcted_image'=>$selected_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>2, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                  $output='<span class="status_btn status_btn'.$order_id.'" style="background-color:'. $color.'">Proccesing in Culling with '.$employee_name1.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
   

            }

            return response($output);


           }else{

              return response()->json(['error'=>$validator->errors()]);


           }

            }



  /***************************status-2*******************************************/     



        public function update_status_2(Request $request,$id){


           $validator=Validator::make($request->all(),[

             'selected_image'=>'required',

            ]);

           if($validator->passes()){

            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $total_image=$request->input('total_image');

              /* $culling_employee=$request->input('culling_employee');
               $employee_name=DB::table('employee_list')->where('id',$culling_employee)->get();
 
               $employee_name1=$employee_name[0]->employee_name;*/
   
            /* $current_status='Proccesing in Culling with '. $employee_name1;*/

             $order_data=DB::table('order_list')->where('id',$order_id)->get();

              $data_type=$order_data[0]->data_type;

              $order_type=$order_data[0]->order_type;

              $order_type=$order_data[0]->order_type;

              $client_editor=$order_data[0]->client_editor;



            

            if($data_type==1){


              if($order_type==1 && $client_editor==0 ){


                   $current_status='A Wating assine to Editor for Anchor';
                   $status_data=3;

                   $color='#D6D0F6';

               }else if($order_type==1 && $client_editor==1){



                   $current_status='A Wating assine For Editor ';
                   $status_data=5;

                   $color='#ADF3FD';



               }else{

                     $current_status='Catalog ready to send';
                     $status_data=8;
                     $color='#FDE7AD';

               }


    

            }else if($data_type==2){


                if($order_type==1 && $client_editor==0 ){


                   $current_status='A Wating assine to Editor for Anchor';
                   $status_data=3;

                   $color='#D6D0F6';

               }else if($order_type==1 && $client_editor==1){



                   $current_status='A Wating assine For Editor ';
                   $status_data=5;

                   $color='#ADF3FD';



               }else{

                   
                $current_status='Gallary ready to send';

                $status_data=9;

                 $color='#FDE7AD';

            }
            }


            $created_at=Carbon::now();

            $status=DB::table('status2_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'selected_image'=>$selected_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
             }


             $output='';

              if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>


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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';

   

            }

            return response($output);


           }else{

              return response()->json(['error'=>$validator->errors()]);


           }

           }


    /***************************status-8and status-9*******************************************/     



        public function update_status_89(Request $request,$id){
   

            $order_id=$id;

            $total_image=$request->input('total_image');
            $status=$request->input('current_status');

            $current_status=' ';
              $color='#ADFEC4';


             if($status==9){              
                  
              $value=$request->update_gallery; 

              if($value==0){
                   
               return response()->json(['error'=>'0'
                  ]);

                }else{


                $status=DB::table('status89_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'update_gallery'=>$value]);

                  $current_status='Order Completed'; 
                  $status_data=10;
                

                  if($status){

                  $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                  }
  

                }


                
              }else if($status==8){

                $value=$request->send_client; 

              if($value==0){

                   
               return response()->json(['error'=>'1'
                  ]);

                }else{


                $status=DB::table('status89_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'send_client'=>$value]);

                  $current_status='Order Completed'; 
                  $status_data=10;
                

                  if($status){

                  $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                  }


              }
            }

             $output='';

              if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>


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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';


                   }

            return response($output);


          

           }


   /***************************status-10*******************************************/     
         


        public function update_status_10(Request $request,$id){


            $order_id=$id;

            $total_image=$request->input('total_image');
            $status=$request->input('current_status');
            $revison_employee=$request->revision_employee;

              $current_status=' ';

              $is_cancle=$request->is_cancle;

                 $output='';


              if($is_cancle==1){

                $color='#FF6F57';

                $current_status='Order cancel'; 
                $status_data=13;


                   $status=DB::table('status10_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'revison_employee'=>null,'is_cancle'=>$is_cancle]);              

                  if($status){

                      $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);

                    }

                     if($order){
    
                           $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
                      }

                }else{


                        $color='#EA99D1';
                        $current_status='Process in revision'; 
                        $status_data=11;
                
                        $status=DB::table('status10_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'revison_employee'=>$revison_employee,'is_cancle'=>$is_cancle]);

               
                       if($status){

                            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                        }
  

                      if($order){

                           $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
                           }

                }
          
            return response($output);


          

           }    


    /***************************status-11*******************************************/     
 


        public function update_status_11(Request $request,$id){
   

            $order_id=$id;

            $total_image=$request->input('total_image');
            $status=$request->input('current_status');

       
                            
             $value=$request->revison_done; 

              if($value==0){
                   
               return response()->json(['error'=>'0'
                  ]);

                }else{


                $status=DB::table('status11_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'revison_done'=>$value]);

                  $current_status='Revision Done, Ready to Send'; 
                  $status_data=12;
                  $color='#9FBDE3';        

                  if($status){

                  $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                  }


                     $output='';

                 if($order){

                     $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';

                             }

                      return response($output);
  

                }

              }


   /***************************status-12*******************************************/     

        public function update_status_12(Request $request,$id){
   

              $order_id=$id;

              $total_image=$request->input('total_image');
              $status=$request->input('current_status');
            
              $data_type=$request->data_type;

               $current_status=' ';

               $color='#ADFEC4';


             if($data_type==2){              
                  
              $value=$request->update_gallery; 

              if($value==0){
                   
               return response()->json(['error'=>'0'
                  ]);

                }else{


                $status=DB::table('status12_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'update_gallery'=>$value]);

                  $current_status='Order Completed'; 
                  $status_data=10;
                

                  if($status){

                  $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                  }
  

                }


                
              }else if($data_type==1){

                $value=$request->send_client; 

              if($value==0){

                   
               return response()->json(['error'=>'1'
                  ]);

                }else{


                $status=DB::table('status12_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'send_client'=>$value]);

                  $current_status='Order Completed'; 
                  $status_data=10;
                

                  if($status){

                  $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
                  }


                }
              }

             $output='';

              if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>


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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';

                      }

               return response($output);


          

               }


   /***************************status-3*******************************************/        


     public function update_status_3(Request $request,$id){


            $order_id=$id;

            $total_image=$request->input('total_image');
        
            

             $anchor_employee=$request->input('anchor_employee');
             $employee_name=DB::table('employee_list')->where('id',$anchor_employee)->get();

           $employee_name1=$employee_name[0]->employee_name;

           $current_status='Proccesing in Anchor Edit with '. $employee_name1;

           $color='#FDE7AD';


            $created_at=Carbon::now();

            $status=DB::table('status3_db')->insert(['order_id'=>$order_id,'anchor_employee'=>$employee_name1,'total_image'=>$total_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>4, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'. $color.'">Proccesing in Anchor Edit with '.$employee_name1.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
   

            }

            return response($output);


           }


   /***************************status-4*******************************************/     


        public function update_status_4(Request $request,$id){


           $validator=Validator::make($request->all(),[

             'selected_image'=>'required',

            ]);

           if($validator->passes()){

            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $editing_image=$request->editing_image;
          

             $editing_employee=$request->input('editing_employee');
             $employee_name=DB::table('employee_list')->where('id',$editing_employee)->get();

             $employee_name1=$employee_name[0]->employee_name;

             $current_status='Proccesing in Editiong with '. $employee_name1;

             $color='#FEBFAD';

             $status1=6;

            $created_at=Carbon::now();

            $status=DB::table('status4_db')->insert(['order_id'=>$order_id,'editing_employee'=>$employee_name1,'total_image'=>$total_image,'selected_image'=>$selected_image,'editing_image'=>$editing_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status1, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'. $color.'">Proccesing in Editiong with '.$employee_name1.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';

              }

               return response($output);

  
              }else{
  
              return response()->json(['error'=>$validator->errors()]);


           }

            }


    /***************************status-6*******************************************/   


      public function update_status_6(Request $request,$id){


           $validator=Validator::make($request->all(),[

             'selected_image'=>'required',

            ]);

           if($validator->passes()){

            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $total_edit_image=$request->input('total_edit_image');

             $status1=7;




           $current_status='Waiting to check catalog';

           $color='#FFD5AA';


            $created_at=Carbon::now();

            $status=DB::table('status6_db')->insert(['order_id'=>$order_id,'total_image'=>$total_image,'selected_image'=>$selected_image,'total_edit_image'=>$total_edit_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status1, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                  $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'. $color.'">Waiting to check catalog </span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
   

            }

            return response($output);


           }else{

              return response()->json(['error'=>$validator->errors()]);


           }

            }           



     /***************************status-7*******************************************/     


        public function update_status_7(Request $request,$id){


           $validator=Validator::make($request->all(),[

             'selected_image'=>'required',

            ]);

           if($validator->passes()){

            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $total_image_for_check=$request->total_image_for_check;
        

             $checking_employee=$request->input('checking_employee');
             $employee_name=DB::table('employee_list')->where('id',$checking_employee)->get();

           $employee_name1=$employee_name[0]->employee_name;

            $order_data=DB::table('order_list')->where('id',$order_id)->get();

              $data_type=$order_data[0]->data_type;

            

            if($data_type==1){


              $current_status='Catalog ready to send';
              $status_data=8;

                $color='#FDE7AD';

            }else if($data_type==2){

                   
              $current_status='Gallary ready to send';

               $status_data=9;

                 $color='#FDE7AD';

            }
          

            $status=DB::table('status7_db')->insert(['order_id'=>$order_id,'checking_employee'=>$employee_name1,'total_image'=>$total_image,'selected_image'=>$selected_image,'total_image_for_check'=>$total_image_for_check]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                    $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
   

            }

            return response($output);


           }else{

              return response()->json(['error'=>$validator->errors()]);


           }

            }



      /***************************status-5*******************************************/     


        public function update_status_5(Request $request,$id){


            $order_id=$id;

            $total_image=$request->input('total_image');
            $selected_image=$request->input('selected_image');
            $editing_image=$request->editing_image;
        

             $editing_employee=$request->input('editing_employee');
             $employee_name=DB::table('employee_list')->where('id',$editing_employee)->get();

             $employee_name1=$employee_name[0]->employee_name;

   

              $current_status='Proccesing in Editing with'. $employee_name1;
              $status_data=6;

                $color='#FEBFAD';


            $status=DB::table('status5_db')->insert(['order_id'=>$order_id,'editing_employee'=>$employee_name1,'total_image'=>$total_image,'editing_image'=>$editing_image]);

            if($status){

            $order=DB::table('order_list')->where('id',$order_id)->update(['status'=>$status_data, 'current_status'=>$current_status]);
             }


             $output='';

             if($order){

                    $output='<span class="status_btn  status_btn'.$order_id.'" style="background-color:'.$color.'">'.$current_status.'</span>

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
                                                <a class="dropdown-item" onclick="update_status('.$order_id.')">Update</a>
                                                <a class="dropdown-item" onclick="edit_status_data('.$order_id.')">Edit</a>
                                            </div>
                                           </div>
                                         </div> ';
   

                       }

            return response($output);


        

            }

      

/************************************** update order*******************************/


     public function update_Order_data($id){
     

      $order=DB::table('order_list')->where('id',$id)->get();

        $data['source']=$order[0]->source;
        $data['customer']=$order[0]->customer;
        $data['order_name']=$order[0]->order_name;
        $data['number_of_image']=$order[0]->number_of_image;
        $data['order_type']=$order[0]->order_type;
        $data['data_type']=$order[0]->data_type;
        $data['client_editor']=$order[0]->client_editor;
        $data['edit_image']=$order[0]->edit_image;
        $data['order_id']=$order[0]->id;

        $client_source1=DB::table('client_source')->get();
        $data['client_source_arr']=$client_source1;

           return response()->json([
                 'data' => $data
            ]);
        
   

     }


     


    public function store_update_Order_data(Request $request,$id){


         $validator=Validator::make($request->all(),[

           
            
            'order_name' => 'required',
            'number_of_image' => 'required', 
            
          

            ]);

           if($validator->passes()){

             $client_source=$request->input('client_source');
             $client_name=$request->input('client_name');
             $order_name=$request->input('order_name');
             $number_of_image=$request->input('number_of_image');
           /*  $order_type=$request->order_type;
             $type_of_data=$request->type_of_data;*/
             $client_edited=$request->client_edited;
             $number_of_edit=$request->input('number_of_edit');
      

              $date =Carbon::now()->format('Y-m-d');

              $updated_at=Carbon::now();



      $order=DB::table('order_list')->where('id',$id)->get();

        $date=$order[0]->order_date;
        $status=$order[0]->status;
        $current_status=$order[0]->current_status;
        $created_at=$order[0]->created_at;
        $order_type=$order[0]->order_type;
        $type_of_data=$order[0]->data_type;
        $client_edited=$order[0]->client_editor;
       

             $order=DB::table('order_list')->where('id',$id)->update(['order_date'=>$date,'source'=>$client_source,'customer'=>$client_name,'order_name'=>$order_name,'status'=>$status, 'order_type'=>$order_type, 'number_of_image'=>$number_of_image,'data_type'=>$type_of_data,'client_editor'=>$client_edited, 'current_status'=>$current_status,'edit_image'=>$number_of_edit,'created_at'=>$created_at,'updated_at'=>$updated_at]);



                     $order_list=DB::table('order_list')->orderBy('id', 'DESC')->paginate(9);



                     $client_source=DB::table('client_source')->get();
                     $client_list1=customer::orderBy('id', 'DESC')->get();

                     $order_type=DB::table('order_type')->get();

                     $status_list=DB::table('status_list')->get();
    

                    $total_row = $order_list->count();

                    $output='';

                      if($total_row > 0){
                          foreach($order_list as  $key =>$row) {

                              $sr_no=$key+1;

                               /* $newDate =Carbon::createFromFormat('m/d/Y', $row->order_date)->format('d-m-Y');*/


                                       $output .= '<tr>
                                                <td><span class="text-nowrap">'.$sr_no.'<span><br> <span>'.$row->order_date.'</span></td>';

                                                foreach($client_source as $cs){

                                                  if($cs->id== $row->source){

                                                    $output .='<td><span class="text-nowrap">'.$cs->name.'</span></td>';

                                                      }

                                                    
                                                   }

                                                 foreach($client_list1 as $cl){

                                                    if($cl->id== $row->customer){

                                                      $output .= '<td>'.$cl->client_name.'<br>'.$row->order_name.'</td>';


                                                     }

                                                 }   


                                                   foreach($order_type as $ot){

                                                    if($ot->id==$row->order_type){

                                                     $output .='<td>'.$ot->name.'</td>';

                                                     }
 
                                                  }
                                          
            
                                            $output .='<td>'.$row->number_of_image.'</td>';

                                              

                                                 foreach($status_list as $sl){

                                                    if($sl->id== $row->status){

                                                        $output .='<td class="dot-status  status_btn'.$row->id.'" id="status_'.$row->id.'"><span class="status_btn"style="background-color:'.$sl->colour.'">'.$sl->name.'</span>

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
                                                                  <a class="dropdown-item" onclick="update_status('.$row->id.')">Update</a>
                                                                  <a class="dropdown-item" onclick="edit_status_data('.$row->id.')">Edit</a>
                                                                  </div>
                                                             </div>
                                                          </div>
                                                         </td>';

                                                      }
   
                                                   }
                                            
                                                 $output .='<td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">Update</a></td>
                                             </tr>';   

                                             }  
                                        
          
                                  }else{
                         
                                 $output .='<h3> Order data is not available...</h3>';
         
                           } 
         

                       return response($output);

                 }else{

              return response()->json(['error'=>$validator->errors()]);

        }
    }


    public function delete_Order_data($id){




      $order=DB::table('order_list')->where('id',$id)->get();

        $date=$order[0]->order_date;
        $client_source=$order[0]->source;
      //  $status=$order[0]->status;
        $client_name=$order[0]->customer;
        $order_name=$order[0]->order_name;
       // $current_status=$order[0]->current_status;
        $created_at=$order[0]->created_at;
        $order_type=$order[0]->order_type;
        $type_of_data=$order[0]->data_type;
        $client_edited=$order[0]->client_editor;
        $number_of_image=$order[0]->number_of_image;
        $number_of_edit=$order[0]->edit_image;
        $created_at=$order[0]->created_at;
        $updated_at=$order[0]->updated_at;


        $status=13;

        $current_status='Order cancel';
       
         $is_delete=1;
       
       
       $order=DB::table('order_list')->where('id',$id)->update(['order_date'=>$date,'source'=>$client_source,'customer'=>$client_name,'order_name'=>$order_name,'status'=>$status, 'order_type'=>$order_type, 'number_of_image'=>$number_of_image,'data_type'=>$type_of_data,'client_editor'=>$client_edited, 'current_status'=>$current_status,'edit_image'=>$number_of_edit,'created_at'=>$created_at,'updated_at'=>$updated_at,'is_delete'=>$is_delete]);





          return response()->json(['success'=>'Delete oreder data successfully!!!']);

                   

                 }

                
   
        }





          
            


             
           
