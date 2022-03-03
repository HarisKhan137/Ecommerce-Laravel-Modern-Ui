<?php

namespace App\Http\Controllers\Admin\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewsLetterController extends Controller
{
   
 public function Newsletter(){
    $sub = DB::table('newslaters')->get();
    return view('admin.subscriptions.newsletter',compact('sub'));
}


 public function DeleteSub($id){
   DB::table('newslaters')->where('id',$id)->delete();
   $notification=array(
           'messege'=>'Subscriber Deleted Successfully',
           'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);
 }
}
