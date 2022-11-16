<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Screenlist;
use Illuminate\Support\Str;
use App\Http\Controllers\ShowController;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Person;
use App\Visitor;
use App\Device;
use App\Background;
use App\Setting;
use App\Dirty;
use App\Pickup;
use Redirect;
use Moontoast\Math\BigNumber;
use Psy\CodeCleaner\FunctionContextPass;

class ShowController extends Controller
{
    //
    public function index()
    {
        //
        $sortshow = screenlist::orderBy('timestart','desc')->paginate(10);
        $joinDevice = Screenlist::join('devices','devices.id','=','screenlists.device_id')->select('screenlists.id as screen_id','screenlists.*','devices.*')->get();
        $referDevice = device::all();
        return view('show.showdashboard', compact('sortshow','referDevice','joinDevice'));
    }

    public function create()
    {
        //
        // ส่ง person -> create.blade.php
        $visitors = visitor::all();
        $persons = person::all();
        $devices = device::all();
        $backgrounds = background::all();
        $settings = setting::all();
        return view('show.create', compact('persons', 'visitors', 'devices', 'backgrounds', 'settings'));
    }

    public function store(Request $request)
    {
        //
        $string = $request->background_id;
        $firstchar = $string[0];
        // asd.jpeg or #dsada
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>"กรุณาป้อนชื่อ welcome screen",
            'name.max' =>"ห้ามป้อนเกิน 25 ตัวอักษร",
        ]);
        $uuidgen = Str::uuid();
        //set type file
            // 'people'=>collect($request->person_id)->implode(','),
            // 'visitors'=>collect($request->visitor_id)->implode(','),
            
            
        $show = new Screenlist([
            'name'=>$request->get('name'),
            'message_top'=>$request->get('message-top'),
            'message_bot'=>$request->get('message-bottom'),
            'device_id'=>$request->device_id,
            'uuid'=>$uuidgen,
            'theme'=>$request->get('theme'),
            'people'=>serialize($request->get('person_id')),
            'visitors'=>serialize($request->get('visitor_id')),
            'timestart'=>$request->get('timestart'),
            'timeend'=>$request->get('timeend'),
            'datestart'=>$request->get('datestart'),
            'dateend'=>$request->get('dateend')
        ]);

        $dirty = new Dirty([
            'pageUUID'=>$uuidgen
        ]);

        $dirty->save();
        $show->save();
        return redirect('/welcome_screen')->with('success', 'เพิ่มหน้า Welcome Screen เรียบร้อยแล้ว!');
    }

    public function edit($id)
    {
        $screen = screenlist::find($id)->first();
        // $selectedVisitors = unserialize($screen->visitors);
        // $selectedPeople = unserialize($screen->people);
        // $visitorsArr = [];
        // foreach ($selectedVisitors as $selectedVisitor) {
        //     $visitors = visitor::where('id','=', $selectedVisitor)->first();
        //     array_push($visitorsArr,$visitors);
        // }
        // $peopleArr = [];
        // foreach ($selectedPeople as $selectedPerson) {
        //     $people = person::where('id','=', $selectedPerson)->first();
        //     array_push($peopleArr,$people);
        // }
        $visitors = visitor::all();
        $persons = person::all();
        $devices = device::all();
        $backgrounds = background::all();
        $settings = setting::all();
        return view('show.edit', compact('peopleArr', 'persons', 'visitorsArr', 'devices', 'backgrounds', 'screen', 'settings', 'visitors'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>"กรุณาป้อนชื่อ welcome screen",
            'name.max' =>"ห้ามป้อนเกิน 25 ตัวอักษร",
        ]);

            $show = Screenlist::find($id)->update([
                'name'=>$request->get('name'),
                'message_top'=>$request->get('message-top'),
                'message_bot'=>$request->get('message-bottom'),
                'device_id'=>$request->device_id,
                'theme'=>$request->get('theme'),
                'people'=>serialize($request->get('person_id')),
            'visitors'=>serialize($request->get('visitor_id')),
                'timestart'=>$request->get('timestart'),
                'timeend'=>$request->get('timeend'),
                'datestart'=>$request->get('datestart'),
                'dateend'=>$request->get('dateend')
            ]);
        
        return redirect('/welcome_screen')->with('success', 'แก้ไข Welcome Screen เรียบร้อยแล้ว!');
    }


    public function viewPage($uuid)
    {
        $screen = screenlist::where('uuid','=',$uuid)->first();
        // $backgrounds = background::join('screenlists', 'screenlists.background_id', '=', 'backgrounds.id')->where('uuid','=',$uuid)->first();
        $visitor = visitor::all()->first();
        // $settings = setting::join('screenlists', 'screenlists.uuid','=','settings.uuid_setting')->where('uuid','=',$uuid)->first();
        $people = person::orderBy('updated_at', 'desc')->first();
        // $people = person::join ;
        $usertype = dirty::where('pageUUID', '=' ,$uuid)->select('usertype')->first();

        //check theme
        if($screen->theme == 'space'){

            $screen = screenlist::where('uuid','=',$uuid)->first();
            // $backgrounds = background::join('screenlists', 'screenlists.background_id', '=', 'backgrounds.id')->where('uuid','=',$uuid)->first();
            $visitor = visitor::orderby('updated_at', 'desc')->first();
            // $settings = setting::join('screenlists', 'screenlists.uuid','=','settings.uuid_setting')->where('uuid','=',$uuid)->first();
            $people = person::orderBy('updated_at', 'desc')->first();
            
            return view('show.showpage', compact('screen','people','visitor', 'uuid', 'usertype'));

        }elseif($screen->theme == 'office'){

            $screen = screenlist::where('uuid','=',$uuid)->first();
            // $backgrounds = background::join('screenlists', 'screenlists.background_id', '=', 'backgrounds.id')->where('uuid','=',$uuid)->first();
            $visitor = visitor::orderby('updated_at', 'desc')->first();
            // $settings = setting::join('screenlists', 'screenlists.uuid','=','settings.uuid_setting')->where('uuid','=',$uuid)->first();
            $people = person::orderBy('updated_at', 'desc')->first();

            return view('show.showpage2', compact('screen','people','visitor', 'uuid', 'usertype'));
        }elseif($screen->theme == 'theme_3'){

            $screen = screenlist::where('uuid','=',$uuid)->first();
            // $backgrounds = background::join('screenlists', 'screenlists.background_id', '=', 'backgrounds.id')->where('uuid','=',$uuid)->first();
            $visitor = visitor::orderby('updated_at', 'desc')->first();
            // $settings = setting::join('screenlists', 'screenlists.uuid','=','settings.uuid_setting')->where('uuid','=',$uuid)->first();
            $people = person::orderBy('updated_at', 'desc')->first();

            return view('show.showpage3', compact('screen','people','visitor', 'uuid', 'usertype'));
        }
    }


    //detect incoming post.
    public function touch(Request $request)
    {   
        $undirty = dirty::updateOrCreate([
            'pageUUID' => $request->input('uuid')
        ], [
            'dirty' => 1,
            'usertype' => $request->input('person')  == null ? 0:1
        ]);
        
        //check the lastest request.

        if($request->input('visitor')){
            $visitor = $request->input('visitor');
            $persons = visitor::where('id', '=', $visitor)->first();
            $persons->touch();
            return $persons;

        }elseif($request->input('person')) {
            $person = $request->input('person');
            $persons = person::where('id', '=', $person)->first();
            $persons->touch();
            return $persons;
        }

        // $person = $request->input('id');
        // $visitor = $request->input('visitor');
        // $person = person::where('id', '=', $id)->first();
        // $person->touch();
        // return $person;
    }

    public function unDirty($uuid)
    {   
        $undirty = dirty::where('pageUUID','=',$uuid)->first();

        $undirty->dirty = 0;
        $undirty->save();

        return $undirty;
    }

    public function isDirty($uuid)
    {
        $isdirty = dirty::where('pageUUID','=',$uuid)->first();
        return $isdirty;
    }
    //end of detecting.

    public function destroy($id)
    {
        $deleted = Screenlist::where('id','=',$id)->first();
        $deleted->delete();
        
        return redirect('/welcome_screen');
    }

    public function preview1()
    {
        return view('show.preview1');
    }

    public function preview2()
    {
        return view('show.preview2');
    }

    public function preview3()
    {
        return view('show.preview3');
    }

    public function callback($uuid)
    {
        $usertype = dirty::where('pageUUID', '=' ,$uuid)->select('usertype')->first();
        $page = screenlist::where('uuid','=', $uuid)->first();
        $persons = person::orderBy('updated_at', 'desc')->first();
        $visitors = visitor::orderby('updated_at', 'desc')->first();
        $pageUUID = $page->uuid;
        $pageName = $page->name;
        return view('show.callback', compact('pageUUID','pageName','persons','visitors','usertype'));
    }
}
