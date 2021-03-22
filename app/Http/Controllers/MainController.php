<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Adminmodel;
use App\models\Flightmodel;

class MainController extends Controller
{
    /****
*@Home page 
*@Drishya
*@date
*@10/03/2021
****/
    public function index()
    {
return view('homepage');
    }
    public function layout()
    {
return view('layout');
    } 
    public function signup()
    {
return view('form');
    }
    /****
*@flight search function start
*@Arsha
*@date
*@12/03/2021
****/
    public function search(){
        $flight=Adminmodel::all();
        return view('menus.search',['airport'=>$flight]);
    }
    public function searchAction(Request $req)
    {
       
        $dep_city = Flightmodel::join('adminmodels', 'adminmodels.id', '=','flightmodels.departure' )
                          ->where('adminmodels.id',$req->departure)
                          ->select('adminmodels.city as dep_city')
                          ->pluck('dep_city');
                        
        $users = Flightmodel::join('adminmodels', 'adminmodels.id', '=','flightmodels.arrival' )
                            ->where('adminmodels.id',$req->arrival)
                            ->select('adminmodels.city as arr_city','flightmodels.id as fid','flightmodels.*', 'adminmodels.*')
                            ->get();
        return view('menus.search',compact('dep_city','users'));

    }
}
