<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Adminmodel;
use App\models\Flightmodel;
use App\models\Notification;

class AdminController extends Controller
{
    //
    /****
*@Admin home
*@Elizabeth
*@date
*@12/03/2021
****/
    public function admin()
    {
return view('admin.index');
    }
    /****
*@Add flight details
*@Arsha
*@date
*@10/03/2021
****/
    public function flight()
    {
        $flight=Adminmodel::all();
return view('admin.flight',['airport'=>$flight]);
    }
    /****
*@airport details
*@Drishya
*@date
*@11/03/2021
****/
    public function airport()
    {
return view('admin.airport');
    }
    /****
*@Add airport details
*@Drishya
*@date
*@11/03/2021
****/
    function addairports(Request $req)
    {
        $airport=new Adminmodel;
        $airport->aname=$req->aname;
        $airport->abr=$req->abr;
        $airport->city=$req->city;
        $airport->state=$req->state;
        $airport->phone=$req->phone;
        
       
        $airport->save();
        return redirect('airport');

    }
    /****
*@Add flight details
*@Arsha
*@date
*@10/03/2021
****/
    function addflight(Request $req)
    {
        $flight=new Flightmodel;
        $flight->fname=$req->fname;
        $flight->fno=$req->fno;
        $flight->departure=$req->departure;
        $flight->arrival=$req->arrival;
        $flight->depdate=$req->depdate;
        $flight->arridate=$req->arridate;
        $flight->deptime=$req->deptime;
        $flight->arritime=$req->arritime;
        $flight->fcharge=$req->fcharge;
        $flight->echarge=$req->echarge;
        $flight->bcharge=$req->bcharge;
        $flight->fseat=$req->fseat;
        $flight->eseat=$req->eseat;
        $flight->bseat=$req->bseat;
        $flight->save();
        return redirect('flight');

    }
     /****
*@view airport details
*@Drishya
*@date
*@11/03/2021
****/
   
    public function airportview()
    {
        $data=Adminmodel::all();
        return view('admin.airportview',['users'=>$data]);

    }
     /****
*@Delete airport details
*@Drishya
*@date
*@11/03/2021
****/
    function delete($id)
    {

        
        $data=Adminmodel::find($id);
        $data->delete();
         return redirect('airpotview');
    }
    /****
*@update airport details
*@drishya
*@date
*@11/03/2021
****/
    function show($id)
    {
        $data=Adminmodel::find($id);
        
         return view('admin.update',['user'=>$data]);
    }
    /****
*@update function start
*@drishya
*@date
*@11/03/2021
****/
    function update(Request $req)
    {
        $data=Adminmodel::find($req->id);
        $data->aname=$req->aname;
        $data->abr=$req->abr;
        $data->city=$req->city;
        $data->state=$req->state;
        $data->phone=$req->phone;
        $data->save();
        return redirect('airpotview');

}
/****
*@flight view function start
*@Leena
*@date
*@11/03/2021
****/

public function flightview()
    {
        
        $data = DB::table("flightmodels")
          ->select("flightmodels.*",
                    DB::raw("(SELECT city FROM adminmodels
                                WHERE adminmodels.id = flightmodels.departure) as depcity"),
                    DB::raw("(SELECT city FROM adminmodels
                                WHERE adminmodels.id = flightmodels.arrival) as arrcity"))
          ->get();
        
        return view('admin.flightview',['users'=>$data]);

    }
    /****
*@flight delete function
*@Arsha
*@date
*@11/03/2021
****/
    function delete1($id)
    {

        
        $data=Flightmodel::find($id);
        $data->delete();
         return redirect('flightview');
    }
    function show1($id)
    {
        $data=Flightmodel::find($id);  
        return view('admin.update1',['user'=>$data]);

    }
    /****
*@ flight update function start
*@Arsha
*@date
*@11/03/2021
****/
    function update1(Request $req)
    {
        $data=Flightmodel::find($req->id);
        $data->fname=$req->fname;
        $data->fno=$req->fno;
        $data->depdate=$req->depdate;
        $data->arridate=$req->arridate;
        $data->deptime=$req->deptime;
        $data->arritime=$req->arritime;
        $data->fcharge=$req->fcharge;
        $data->echarge=$req->echarge;
        $data->bcharge=$req->bcharge;
        $data->fseat=$req->fseat;
        $data->eseat=$req->eseat;
        $data->bseat=$req->bseat;

        $data->save();
        return redirect('flightview');

}
/****
*@Notification function start
*@Elizabeth
*@date
*@12/03/2021
****/
public function notification()
    {
return view('admin.notification');
    }


function addnotification(Request $req)
{
    $airport=new Notification;
    $airport->notification=$req->notification;
    $airport->notdate=$req->notdate;
    $airport->save();
    return redirect('notification');

}
/****
*@Notification view
*@Arsha
*@date
*@12/03/2021
****/
public function notificationview()
    {
        $data=Notification::all();
        return view('admin.viewnotif',['users'=>$data]);

    }
    /****
*@delete notification
*@Elizabeth
*@date
*@12/03/2021
****/
    function deletenotif($id)
    {

        
        $data=Notification::find($id);
        $data->delete();
         return redirect('notificationview');
    }
    /****
*@view notification
*@Elizabeth
*@date
*@12/03/2021
****/
    public function usernotification()
    {
        $data=Notification::all();
        return view('admin.usernotif',['users'=>$data]);

    }
}
