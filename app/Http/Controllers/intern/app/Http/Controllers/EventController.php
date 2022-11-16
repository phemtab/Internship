<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\userinfo;
use App\Http\Controllers\EventController;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Exports\UsersExport;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     
    {
       $sortmain=event::orderBy('created_at','desc')->paginate(10); 
     
       $count = event::orderBy('created_at','desc')->count();

       $countend = event::where('status','=','END')->count();

       $countwait = event::where('status','=','ACTIVE')->count();  

       $countthisday = event::where('status','=','THISDAY')->count();  

       $now = Carbon::today()->toDateString();
       $date = event::where('dateend','<',$now)->update(['status'=>'END']);
       $datetime = event::where('datestart','>=',$now)->where('dateend','<=',$now)->update(['status'=>'THISDAY']);
       $datetimeac = event::where('datestart','>',$now)->update(['status'=>'ACTIVE']);

    
       return view('event.mainevent',compact('sortmain','count','countend','countwait','date','datetime','datetimeac','countthisday'));
      
    }

    public function namesort(Request $request)
    {          
        $name_sort=event::orderBy('NameEvent','asc')->paginate(10);

        $count = event::orderBy('created_at','desc')->count();

       $countend = event::where('status','=','END')->count();

       $countwait = event::where('status','=','ACTIVE')->count();  
       $now = Carbon::today()->toDateString();

       $date = event::where('dateend','<=',now())->update(['status'=>'END']);

       $datetime = event::where('datestart','=',$now)->update(['status'=>'THISDAY']);
       
        return view('event.namesort',compact('name_sort','count','countend','countwait','date','datetime'));

    }

    public function timestartsort()
    {          
        
        $timestart_sort=event::orderBy('timestart','asc')->paginate(10);

        $count = event::orderBy('created_at','desc')->count();

        $countend = event::where('status','=','END')->count();
 
        $countwait = event::where('status','=','ACTIVE')->count();  
        $now = Carbon::today()->toDateString();

        $date = event::where('dateend','<=',now())->update(['status'=>'END']);
        $datetime = event::where('datestart','=',$now)->update(['status'=>'THISDAY']);
       
        return view('event.timesort',compact('timestart_sort','count','countend','countwait','date','datetime'));

    }

    public function datestartsort()
    {           
        
        $datestart_sort=event::orderBy('datestart','asc')->paginate(10);

        $count = event::orderBy('created_at','desc')->count();

        $countend = event::where('status','=','END')->count();
 
        $countwait = event::where('status','=','ACTIVE')->count();  
        $now = Carbon::today()->toDateString();

        $date = event::where('dateend','<=',now())->update(['status'=>'END']);
        $datetime = event::where('datestart','=',$now)->update(['status'=>'THISDAY']);
       
       
        return view('event.datestartsort',compact('datestart_sort','count','countend','countwait','date','datetime'));

    }

    public function tagendsort(Request $request)
    {          
        $tagend_sort=event::orderBy('NameEvent','asc')->where('status','=','end')->paginate(10);

        $count = event::orderBy('created_at','desc')->count();

        $countend = event::where('status','=','END')->count();
 
        $countwait = event::where('status','=','ACTIVE')->count();  
        
        $date = event::where('dateend','<=',now())->update(['status'=>'END']);
       
       
        return view('event.tagend',compact('tagend_sort','count','countend','countwait','date'));

    }

    public function tagwaitsort(Request $request)
    {          
        $tagwait_sort=event::orderBy('NameEvent','asc')->where('status','=','ACTIVE')->paginate(10);

        $count = event::orderBy('created_at','desc')->count();

        $countend = event::where('status','=','end')->count();
 
        $countwait = event::where('status','=','ACTIVE')->count();  
        
        $date = event::where('dateend','<=',now())->update(['status'=>'END']);
       
        return view('event.tagwait',compact('tagwait_sort','count','countend','countwait','date'));

    }


   
    public function formQrcode($id)
    {

        $event = event::where('uuid',$id)->firstorfail();
        
        $count = userinfo::where('NameEvent','=',$event->NameEvent)->count();

        $allpeople = event::where('uuid','=',$id)->value('Amount');

        return view('event.fillformevent',compact('event','allpeople','count'));
      
    }


    public function trash()
    {
        $trashevent = event::onlyTrashed()->Paginate(10);
        $date = event::where('dateend','<',now())->update(['status'=>'END']);

        return view('event.trash',compact('trashevent','date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
     public function store(Request $request)
    {
        //ตรวจสอบข้อมูล
        //เพิ่มคำสั่งในฟังก์ชัน store เพื่อดู request ที่ส่งมาทำงานในฟังก์ชันนี้
       
        $request->validate(
        [
            'NameEvent' => 'required|unique:events|max:25',
            'OwnerFirstName' => 'required',
            'OwnerLastName' => 'required',
            'timestart'=> 'required',
            'timeend'=> 'required',
            'location_event'=> 'required',
            'datestart'=> 'required',
            'dateend'=> 'required',
            'Amount' => 'required|integer|min:1|max:10001',
            'location_event' => 'required|min:1|max:900'
        ],
        [
            'NameEvent.required'=>"กรุณาป้อนชื่อ Event",
            'NameEvent.max' =>"ห้ามป้อนเกิน 25 ตัวอักษร",
            'NameEvent.unique' =>"มีข้อมูลชื่อ Event นี้ในฐานข้อมูลแล้ว",
            'OwnerFirstName.required'=>"กรุณาป้อนชื่อผู้จัดงาน",
            'OwnerLastName.required'=>"กรุณาป้อนนามสกุลผู้จัดงาน",
            'Amount.required'=>"กรุณาป้อนตัวเลข",
            'Amount.integer'=>"กรุณาป้อนเป็นตัวเลข",
            'Amount.max'=>"กรุณาป้อนเลขในช่วง 1-9999",
            'Amount.min'=>"กรุณาป้อนเลขในช่วง 1-9999",
            'datestart.required'=>"กรุณาป้อนวันที่เริ่มงาน",
            'dateend.required'=>"กรุณาป้อนวันที่สิ้นสุดงาน",
            'timestart.required'=>"กรุณาป้อนเวลาที่เริ่มงาน",
            'timeend.required'=>"กรุณาป้อนเวลาที่สิ้นสุดงาน",
            'location_event.required'=>"กรุณาป้อนสถานที่จัดงาน",
            'location_event.min'=>"กรุณาป้อนตัวอักษร",
            'location_event.max'=>"กรุณาป้อนเลขน้อยกว่า 900 ตัวอักษร"
        ]
        
        );
        //บันทึกข้อมูล //สร้าง object จาก model event eloquent
        $uuid = Str::uuid();
        $event = new event;
        $event->NameEvent = $request -> NameEvent; //รับค่าเก็บไว้ใน field NameEvent
        $event->OwnerFirstName = $request -> OwnerFirstName;
        $event->OwnerLastName = $request -> OwnerLastName;
        $event->location_event = $request -> location_event;
        $event->Amount = $request -> Amount;
        $event->timestart = $request -> timestart;
        $event->timeend = $request -> timeend;
        $event->datestart = $request -> datestart;
        $event->dateend = $request -> dateend;
        $event->description_event= $request -> description_event;
        $event->uuid= $uuid;
        

        $event->dynamic_0 = $request -> ans1;   
        $event->dynamic_2 = $request -> ans2;   
        $event->dynamic_4 = $request -> ans3;  
        $event->dynamic_6 = $request -> ans4;  
        $event->save();
        

        return redirect('/event')->with('success',"บันทึกข้อมูลเรียบร้อย");
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function adduser(Request $request)
    {
        //ตรวจสอบข้อมูล
        //เพิ่มคำสั่งในฟังก์ชัน store เพื่อดู request ที่ส่งมาทำงานในฟังก์ชันนี้
        $request->validate(
        [
            'NameEvent' => 'required|max:50',
            'UserFirstName' => 'required',
            'UserLastName' => 'required',
            // 'g-recaptcha-response' => 'required',
            'passportID' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'UserLastName' => 'required'
        ],
        [
            'NameEvent.required'=>"กรุณาเลือก Event",
            'NameEvent.max' =>"ห้ามป้อนเกิน 50 ตัวอักษร",
            'NameEvent.unique' =>"มีข้อมูลชื่อ Event นี้ในฐานข้อมูลแล้ว",
            'UserFirstName.required'=>"กรุณาใส่ชื่อของท่าน",
            'UserLastName.required'=>"กรุณาใส่นามสกุลของท่าน",
            'UserPic.required'=>"กรุณาใส่ภาพประกอบ",
            'UserPic.dimensions'=>"รูปมีขนาดใหญ่เกินไป กำหนดให้ไม่เกิน 3000 x 3000",
            'passportID.required'=>"กรุณาใส่เลขบัตรประชาชน",
            'email.required'=>"กรุณาใส่อีเมล์",
            'email.email'=>"กรุณาใส่อีเมล์",
            'telephone.required'=>"กรุณาใส่หมายเลขติดต่อ",
            'passportID.max'=>"กรุณาตัวเลขเท่ากับ 13 จำนวน",
            // 'g-recaptcha-response.required'=>"กรุณายืนยันตัวตนให้ถูกต้อง"
        ]
        
        );
        //การเข้ารหัสรูปภาพ
        // $userpic = $request ->file('UserPic');
        
        $image = $request -> UserPic;

        list($type,$image)=explode(';',$image);
        list(,$image)=explode(',',$image);

        $image=base64_decode($image);
        $image_name=time().'.png';
        $path=('image/userpic/'.$image_name);

        file_put_contents($path,$image);

        // $image = base64_decode($userpic);
        // $name_gen = hexdec(uniqid());
        // $image_name= $name_gen.'.'.'png';
        // $path = "image/userpic/". $image_name;

        // $fp = fopen($path,'wb+');
        // fwrite($fp,$image);
        // fclose($fp);

        // $image->move($path,$image_name);

        // file_put_contents($path, $image);
      
        // //แปลงฐาน16เป็นฐาน10(Generate Name)
        //1
        // $name_gen = hexdec(uniqid());
        //ดึงนามสกุลของไฟล์ภาพ (2)
        // $img_ext = strtolower($userpic->getClientOriginalExtension());
        //1+2
        // $img_name = $name_gen.'.'.$img_ext;
        
        // //อัพโหลดและบันทึกข้อมูล
        // $upload_location = 'image/userpic/';     //ตำแหน่งที่จะเก็บภาพ
        // $full_path = $upload_location.$img_name;

        $userinfo = new userinfo;
        $userinfo->NameEvent = $request -> NameEvent; //รับค่าเก็บไว้ใน field NameEvent

        $userinfo->UserFirstName = $request -> UserFirstName;
        $userinfo->UserLastName = $request -> UserLastName;
        $userinfo->email = $request -> email;
        $userinfo->telephone = $request -> telephone;
        $userinfo->passportID = $request -> passportID;
        $userinfo->UserPic = $path;

        $userinfo->dynamic_1 = $request -> dynamic_1;   
        $userinfo->dynamic_3 = $request -> dynamic_3;   
        $userinfo->dynamic_5 = $request -> dynamic_5;  
        $userinfo->dynamic_7 = $request -> dynamic_7; 
        $userinfo->save();
        //ทดลองอัพโหลด
        return redirect('/event/success')->with('success',"บันทึกข้อมูลเรียบร้อย");

}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ดึงข้อมูลมาจาก database เก็บไว้ในตัวแปร event
        $event = event::find($id);
        
        //สั่งให้เปิดหน้าใน FOlder event.edit
        return view('event.edit',compact('event'));
    }

    public function view($NameEvent)
    {
        //ดึงข้อมูลมาจาก database เก็บไว้ในตัวแปร event
        
        $view = userinfo::where('NameEvent','=',$NameEvent)->paginate(10); //แสดงตาราง

        $export = userinfo::where('NameEvent','=',$NameEvent)->paginate(1); //แสดงตาราง

        $view_top = userinfo::where('NameEvent','=',$NameEvent)->paginate(1); //แสดงชื่อ

        $count = userinfo::where('NameEvent','=',$NameEvent)->count();

        $allpeople = event::where('NameEvent','=',$NameEvent)->value('Amount');

        $dynamic0 = event::where('NameEvent','=',$NameEvent)->value('dynamic_0');
        $dynamic2 = event::where('NameEvent','=',$NameEvent)->value('dynamic_2');
        $dynamic4 = event::where('NameEvent','=',$NameEvent)->value('dynamic_4');
        $dynamic6 = event::where('NameEvent','=',$NameEvent)->value('dynamic_6');

        //สั่งให้เปิดหน้าใน FOlder event.edit    
        return view('event.view',compact('view','view_top','count','allpeople','dynamic0','dynamic2','dynamic4','dynamic6','export','count_new'));
    }

    function search(Request $request){
        $search = $request->input('search');

        $search_view = event::where('NameEvent','LIKE',"%{$search}%")
        ->orWhere('location_event','LIKE',"%{$search}%")
        ->orWhere('datestart','LIKE',"%{$search}%")
        ->orWhere('dateend','LIKE',"%{$search}%")
        ->orWhere('timestart','LIKE',"%{$search}%")
        ->orWhere('timeend','LIKE',"%{$search}%")
        ->orWhere('id','LIKE',"%{$search}%")
        ->orWhere('Amount','LIKE',"%{$search}%")
        ->paginate(10);

        return view('event.search',compact('search_view'));
        
    }

    public function qrcode($uuid)
    {   
        //ดึงข้อมูลมาจาก database เก็บไว้ในตัวแปร event
        $qrcodeview = event::where('uuid',$uuid)->paginate(1);

        //สั่งให้เปิดหน้าใน FOlder event.edit
        return view('event.qrcode',compact('qrcodeview'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate(
        [
            'NameEvent' => 'required|max:25',
            'OwnerFirstName' => 'required',
            'OwnerLastName' => 'required',
            'Amount' => 'required|integer|min:1|max:9999'
        ],
        [
            'NameEvent.required'=>"กรุณาป้อนชื่อ Event",
            'NameEvent.max' =>"ห้ามป้อนเกิน 25 ตัวอักษร",
            'Amount.required'=>"กรุณาป้อนตัวเลข",
            'Amount.integer'=>"กรุณาป้อนเป็นตัวเลข",
            'Amount.max'=>"กรุณาป้อนเลขในช่วง 1-9999",
            'Amount.min'=>"กรุณาป้อนเลขในช่วง 1-9999"
        ]
        
        );
            $changename = event::where('id','=',$id)->value('NameEvent');
            userinfo::where('NameEvent','=',$changename)->update([
                'NameEvent'=>$request-> NameEvent
            ]);

            //update ตามเลข id ที่ส่งเข้ามาที่เป็น primary key
            event::find($id)->update ([

                'NameEvent'=>$request-> NameEvent,
                'OwnerFirstName' => $request -> OwnerFirstName,
                'OwnerLastName' => $request -> OwnerLastName,
                'Amount' => $request -> Amount,
                'location_event' => $request -> location_event,
                'timestart' => $request -> timestart,
                'timeend' => $request -> timeend,
                'datestart' => $request -> datestart,
                'dateend' => $request -> dateend,
                'description_event' => $request -> description_event,   
                'dynamic_0' => $request -> ques1,
                'dynamic_2' => $request -> ques2,
                'dynamic_4' => $request -> ques3,
                'dynamic_6' => $request -> ques4
            ]);
            return redirect('/event')->with('success',"อัพเดทข้อมูลเรียบร้อย");
        }       
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function softdelete($id)
    {
        $delete = event::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");

    }

    public function delete($id)
    {
        $delete = event::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");

    }

    public function deleteview($id)
    {   
        //ลบภาพ
        $img = userinfo::find($id)->UserPic;
        //ลบข้อมูล
        unlink($img);
        $deleteview = userinfo::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");

    }
    
    public function restore($id){
        $restore = event::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }


}
