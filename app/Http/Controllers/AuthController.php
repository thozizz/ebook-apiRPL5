<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 123455778,
            'Name' => 'Thoriq Abdul AM',
            'Phone' => '088218682879',
            'Class' => 'XII RPL 5'
        ];
    }
}
