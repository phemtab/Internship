<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Dirties;
use App\Custom;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message = Message::all();
        return view('message.index', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'profile'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'department'=>'required',
            'company'=>'required'
        ]);

        $message = new Message([
            'name'=>$request->get('name'),
            'profile'=>$request->get('profile'),
            'department'=>$request->get('department'),
            'company'=>$request->get('company'),
            'show_message'=>$request->get('show_message')
        ]);

        $userprofile = $request->file('profile');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($userprofile->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $upload_location = 'image/welcomeuser/';
        $full_path = $upload_location.$img_name;
        
        $message->profile = $full_path;
        $userprofile->move($upload_location,$img_name);
        $message->save();
        return redirect('/show')->with('success', 'Person saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //show sure the lastest request.
        $background = Custom::first();
        $first = Message::orderBy('updated_at', 'desc')->first();
        return view('message.test', compact('background', 'first'));//['first' => $first]
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $message = Message::find($id);
        return view('message.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'profile'=>'required',
            'department'=>'required',
            'company'=>'required'
        ]);

        $message = Message::find($id);
        $message->name = $request->get('name');
        $message->profile = $request->get('profile');
        $message->department = $request->get('department');
        $message->company = $request->get('company');
        $message->show_message = $request->get('show_message');

        $userprofile = $request->file('profile');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($userprofile->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $upload_location = 'image/welcomeuser/';
        $full_path = $upload_location.$img_name;
        
        $message->profile = $full_path;
        $userprofile->move($upload_location,$img_name);
        $message->save();

        return redirect('/message')->with('success', 'Person updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = Message::find($id);
        $message->delete();

        return redirect('/message')->with('success', 'Person deleted!');
    }

    public function touch(Request $request)
    {   
        $undirty = dirties::first();
        $undirty->dirty = 1;
        $undirty->save();
        
        //check the lastest request.
        $id = $request->input('id');
        $message = Message::where('id', '=', $id)->first();
        $message->touch();
        return $message;
    }

    public function unDirty()
    {
        $undirty = dirties::first();
        $undirty->dirty = 0;
        $undirty->save();

        return dirties::first();
    }

    public function isDirty()
    {
        return dirties::first();
    }


    //customize page.
    public function customCreate()
    {
        //
        return view('message.create_custom');
    }

    public function customStore(Request $request)
    {
        $request->validate([
            'background'=>'required|mimes:jpeg,png,jpg,gif,svg,mp4|max:2048',
            'second'=>'required'
        ]);

        $custom = new Custom([
            'background'=>$request->get('background'),
            'second'=>$request->get('second')
        ]);

        $bg_file = $request->file('background');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($bg_file->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $upload_location = 'image/bgpic/';
        $full_path = $upload_location.$img_name;
        
        $custom->background = $full_path;
        $bg_file->move($upload_location,$img_name);
        $custom->save();
        
        return redirect('/custom')->with('success', 'Default value saved!');
    }

    public function custom()
    {
        $custom = Custom::first();
        return view('message.customDash', compact('custom'));
    }

    public function customEdit()
    {
        $custom = Custom::first();
        return view('message.customize', compact('custom'));
    }

    public function customUpdate(Request $request)
    {
        $request->validate([
            'background'=>'required|mimes:jpeg,png,jpg,gif,svg,mp4|max:2048',
            'second'=>'required'
        ]);
        $custom = Custom::first();
        $custom->background = $request->get('background');
        $custom->second = $request->get('second');
        $bg_file = $request->file('background');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($bg_file->getClientOriginalExtension());

        $img_name = $name_gen.'.'.$img_ext;

        $upload_location = 'image/bgpic/';
        $full_path = $upload_location.$img_name;
        
        $custom->background = $full_path;
        $bg_file->move($upload_location,$img_name);
        $custom->save();

        return redirect('/custom')->with('success', 'Welcome screen updated!');
    }
   
}
