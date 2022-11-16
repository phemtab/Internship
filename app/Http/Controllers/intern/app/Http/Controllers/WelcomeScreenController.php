<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Screenlist;
use Illuminate\Support\Str;
use App\Http\Controllers\WelcomeScreenController;
use App\Person;
use App\Visitor;
use App\Device;
use App\Background;
use App\Setting;
use App\Dirty;
use App\Pickup;
use App\Users;
use Redirect;
use Moontoast\Math\BigNumber;



class WelcomeScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   
    public function show($id)
    {

        $screen = screenlist::where('uuid','=','70b46f9d-3d90-403a-88da-36fc9825b222')->get();
        $backgrounds = background::join('screenlists', 'screenlists.background_id', '=', 'backgrounds.id')->where('uuid','=','70b46f9d-3d90-403a-88da-36fc9825b222')->first();
        $users = Users::where('id','=',$id)->get();

       // echo ("<script>console.log('user data : $users');</script>");

        return view('welcome_screen.show', compact('screen','backgrounds','users'));
      
    }

    public function front()
    {

      
        return view('welcome_screen.front');
      
    }


    


}
