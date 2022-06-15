<?php

namespace App\Http\Controllers;

use App\Jobs\CustomerJob;

class EmailController extends Controller
{
    //
    public function sendEmail()
    {

        $name['name'] = 'POND';
        $email['email'] = 'mapond_gunner@hotmail.com';
        dispatch(new CustomerJob($email, $name));

        dd('asdsa');
    }
}
