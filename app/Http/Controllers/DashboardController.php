<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /****
*@Login function
*@Leena CB
*@date
*@11/03/2021
****/
    public function adminlogin(){
        return view('adminlogin');
        }
        public function loginAction(Request $req){
            if($req->email=='admin@admin.com' && $req->password=="admin123"){
                return view('adminDash');

            }
        }
    
}
