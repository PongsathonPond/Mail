<?php

namespace App\Http\Controllers;

use App\Jobs\CustomerJob;
use Illuminate\Http\Request;
class EmailController extends Controller
{
    //


    
    public function sendEmail(Request $request)
    {
      
        $name['name'] = 'RMUTI';
        $email['email'] = $request->email;
        
        dispatch(new CustomerJob($email, $name));
       
        return redirect()->back()->with('update', "อัพเดตข้อมูลเรียบร้อย");
    }



 }
