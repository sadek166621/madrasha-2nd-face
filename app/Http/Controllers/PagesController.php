<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use App\Models\Admin\Notice;
use App\Models\Admin\News;
use App\Models\Admin\campusmale;
use App\Models\Admin\campusfemale;
use App\Models\Admin\about;
use App\Models\Admin\more;
use App\Models\Admin\onlineclass;
use App\Models\Admin\course;
use App\Models\Admin\studentreg;
use App\Models\Weekly;
use App\Models\Curriculum;
use App\Models\beteacher;
use App\Models\Division;
use App\Models\District;
use Session;
use DB;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        $data['notices'] = Notice::where('status', 1)->limit(5)->get();
        $data['news'] = News::where('status', 1)->limit(5)->get();
        return view('frontend.index', $data);
    }

    public function vicePrincipalMessage()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        return view('frontend.vice_principal_message', $data);
    }

    public function principalMessage()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        return view('frontend.principal_message', $data);
    }

    public function teacher()
    {
        if(isset($_GET['department']) && $_GET['department']>0){
            $data['teachers'] = Teacher::where('department_id', $_GET['department'])->where('gender',1)->latest()->get();
        }else{
            $data['teachers'] = Teacher::where('status', 1)->where('gender',1)->get();
        }
        $data['departments'] = Department::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.teachers', $data);
    }
    public function femaleteacher()
    {
        if(isset($_GET['department']) && $_GET['department']>0){
            $data['teachers'] = Teacher::where('department_id', $_GET['department'])->where('gender',2)->latest()->get();
        }else{
            $data['teachers'] = Teacher::where('status', 1)->where('gender',2)->get();
        }
        $data['departments'] = Department::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.femaleteachers', $data);
    }
    public function staff()
    {
        if(isset($_GET['location']) && $_GET['location']>0){
            $data['staffs1st'] = Staff::where('location_id', $_GET['location'])->where('class', 1)->latest()->get();
            $data['staffs2nd'] = Staff::where('location_id', $_GET['location'])->where('class', 2)->latest()->get();
            $data['staffs3rd'] = Staff::where('location_id', $_GET['location'])->where('class', 3)->latest()->get();
            $data['staffs4th'] = Staff::where('location_id', $_GET['location'])->where('class', 4)->latest()->get();
        }else{
            $data['staffs1st'] = Staff::where('status', 1)->where('class', 1)->get();
            $data['staffs2nd'] = Staff::where('status', 1)->where('class', 2)->get();
            $data['staffs3rd'] = Staff::where('status', 1)->where('class', 3)->get();
            $data['staffs4th'] = Staff::where('status', 1)->where('class', 4)->get();
        }
        $data['locations'] = Location::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.staffs', $data);
    }
    public function teacherShow($username)
    {
        $data['teacher'] = Teacher::where('username', $username)->first();
        if($data['teacher']){
            $data['setting'] = Setting::first();
            $data['sliders'] = Slider::where('status', 1)->get();
            $data['locations'] = Department::where('status',1)->latest()->get();
            return view('frontend.teacher_profile', $data);
        }
        return redirect()->route('teacher.list');
    }

    public function staffShow($username){
        $data['staff'] = Staff::where('username', $username)->first();
        if($data['staff']){
            $data['setting'] = Setting::first();
            $data['sliders'] = Slider::where('status', 1)->get();
            $data['locations'] = Department::where('status',1)->latest()->get();
            return view('frontend.staff_profile', $data);
        }
        return redirect()->route('staff.list');
    }

    public function notice()
    {
        if(isset($_GET['type']) && $_GET['nottypeice']>0){
            $data['notices'] = Notice::where('notice_id', $_GET['notice'])->latest()->get();
        }else{
            $data['notices'] = Notice::where('status', 1)->get();
        }
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeGeneral()
    {
        $data['notices'] = Notice::where('status', 1)->where('type', 1)->get();

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeOther()
    {
        $data['notices'] = Notice::where('status', 1)->where('type', 2)->get();

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeShow($id)
    {
        $data['notice'] = Notice::findOrFail($id);

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notice_single', $data);
    }

    public function news()
    {
        $data['news'] = News::where('status', 1)->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.news', $data);
    }

    public function newsShow($id)
    {
        $data['news'] = News::findOrFail($id);

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.news_single', $data);
    }

    public function importantlinks(){

    }
    public function quranreadingcourse(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_reading_course', $data);
    }

    public function quranicarabiccourse(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_icarabic_course', $data);
    }
    public function quranmemorizationcourse(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_memorization_course', $data);
    }
    public function quranreadingcoursea(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_reading_course_a', $data);
    }
    public function quranicarabiccoursea(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_icarabic_course_a', $data);
    }
    public function quranmemorizationcoursea(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusmale'] = campusmale::first();
        return view('frontend.quran_memorization_course_a', $data);
    }
    public function forwhom(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['about'] = about::first();
        return view('frontend.for-whom', $data);
    }
    public function sfp(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['about'] = about::first();
        return view('frontend.sfp', $data);
    }
    public function ilq(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['about'] = about::first();
        return view('frontend.ilq', $data);
    }
    public function quranreadingcoursef(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view('frontend.quran_reading_course_f', $data);
    }
    public function quranicarabiccoursef(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view ('frontend.quran_icarabic_course_f', $data);
    }
    public function quranmemorizationcoursef(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view ('frontend.quran_memorization_course_f', $data);
    }
    public function quranreadingcoursefa(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view('frontend.quran_reading_course_f_a', $data);
    }
    public function quranicarabiccoursefa(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view('frontend.quran_icarabic_course_f_a', $data);
    }
    public function quranmemorizationcoursefa(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['campusfemale'] = campusfemale::first();
        return view('frontend.quran_memorization_course_f_a', $data);
    }
    public function contact(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.contact', $data);
    }
    public function BasicsofIslamCampus(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['more'] = more::first();
        return view('frontend.basic-of-islam-campus', $data);
    }
    public function BePartofUs(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['more'] = more::first();
        return view('frontend.Be-Part-of-Us', $data);
    }
    public function DonateUs(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['more'] = more::first();
        return view('frontend.Donate-Us', $data);
    }
    public function studentadmission(){
        $data['courses'] = Course::all();
        $data['divisions'] = Division::all();
        return view('frontend.student-register',$data);
    }
    public function beateacher(){
        $data['setting'] = Setting::first();
        return view('frontend.be-a-teacher', $data);
    }
    public function onlineclass(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['onlineclass'] = onlineclass::get();
        return view('frontend.onlineclass', $data);
    }
    public function weeklydarks(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['onlineclass'] = Weekly::get();
        return view('frontend.weeklydars', $data);
    }
    public function teacherjobapply(Request $request){
        $validated = $request->validate([
            'number' => 'required|min:11|max:14',
            'cv' => 'required|mimes:pdf,jpg,png|max:10000',
            'document' => 'required|mimes:pdf,jpg,png|max:10000',
        ]);

        $beteacher = beteacher::create([
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'full_address'=>$request->full_address,
            'upazilla'=>$request->upazilla,
            'district'=>$request->district,
            'zip_code'=>$request->zip_code,
            'email'=>$request->email,
            'number'=>$request->number,
            'day'=>$request->day,
            'month'=>$request->month,
            'year'=>$request->year,
            'apply_for_position'=>$request->apply_for_position,
            'desired'=>$request->desired,
            'training_experience'=>$request->training_experience,
            'online_work'=>$request->online_work,
        ]);

         $filename = $beteacher->cv;
            $file = $request->file('cv');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/cv')) {
                    mkdir('assets/files/uploads/cv', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/cv'), $filename);
                //$file->move(base_path().'/assets/files/uploads/notices', $filename);
            }

        $beteacher->cv = $filename;

        $filename2 = $beteacher->document;
            $file2 = $request->file('document');
            if($file2){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename2 = $currentDate . '-' . uniqid() . '.' . $file2->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/document')) {
                    mkdir('assets/files/uploads/document', 0777, true);
                }

                $file2->move(public_path('assets/files/uploads/document'), $filename2);
                //$file2->move(base_path().'/assets/files/uploads/notices', $filename2);
            }

            $beteacher->document = $filename2;

            $beteacher->save();

            Toastr::success('Apply successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('home');

    }

    public function studentdashboard(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['dashboard'] =studentreg::where('studentId', Session::get('studentId'))->first();

        return view('frontend.student-dashboard', $data);
    }

    public function logout(){
        Session::forget('studentId');
        Session::forget('studentName');
        Session::forget('studentEmail');
        Toastr::success('Logout Successfully', 'Logout', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home');
    }

    public function getdivision($division_id){
        $division = District::where('division_id', $division_id)->orderBy('district_name_en','ASC')->get();

            return json_encode($division);
        }

        public function curriculum(){
            $data['setting'] = Setting::first();
           $data['sliders'] = Slider::where('status', 1)->get();
           $data['curriculum'] = Curriculum::where('status', 1)->get();
            return view('frontend.curriculum',$data);
        }

}
