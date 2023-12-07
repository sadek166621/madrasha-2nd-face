<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use App\Models\Admin\studentreg;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Studentsignup;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use Hash;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::latest()->get();
        return view('admin.student.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $image = $request->file('image');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('assets/images/uploads/students')) {
                mkdir('assets/images/uploads/students', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/students'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/students', $imageName);

            $image = $imageName;
        }

        $student = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'roll_num' => $request->roll_num,
            'reg_num' => $request->reg_num,
            'phone' => $request->phone,
            'class' => $request->class,
            'reg_num' => $request->reg_num,
            'admission_year' => $request->admission_year,
            'image' => $image,
            'status' => $request->status,
            'address' => $request->address,
        ]);

        Toastr::success('student added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.student.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['student'] = Student::findOrFail($id);

        if($data['student']){
            return view('admin.student.form', $data);
        }

        return back();
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
        $student = Student::find($id);

        if($student){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $student->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/students')) {
                    mkdir('assets/images/uploads/students', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/students'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/students', $imageName);

                $target_image = $imageName;
            }


            $student->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'roll_num' => $request->roll_num,
                'reg_num' => $request->reg_num,
                'phone' => $request->phone,
                'class' => $request->class,
                'reg_num' => $request->reg_num,
                'admission_year' => $request->admission_year,
                'image' => $target_image,
                'status' => $request->status,
                'address' => $request->address,
            ]);

            Toastr::success('student updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.student.list');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        if($student){
            $student->delete();
            Toastr::success('student deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

    public function studentregisterform(Request $request){

        // return $request;

        // $checkedOptions = $request->input('weeks');

            studentreg::insert([
                'studentId'=> $request->studentId,
                'name' => $request->name,
                'initial' => $request->initial,
                'date' => $request->date,
                'month' => $request->month,
                'year' => $request->year,
                'countryplacejoining' => $request->countryplacejoining,
                'gender' => $request->gender,
                'fathername' => $request->fathername,
                'mothername' => $request->mothername,
                'post_code' => $request->post_code,
                'thana' => $request->thana,
                'district_id' => $request->district_id,
                'division_id' => $request->division_id,
                'p_postcode' => $request->p_postcode,
                'P_thana' => $request->P_thana,
                'p_division_id' => $request->p_division_id,
                'p_district_id' => $request->p_district_id,
                'liketostudy' => $request->liketostudy,
                'cls_per_wk' => $request->cls_per_wk,
                'weeks' => json_encode($request->weeks),
                'suitable_time' => $request->suitable_time,
                'phone_number' => $request->phone_number,
                'whatsapp_number' => $request->whatsapp_number,
                'income' => $request->income,
                'tuition_fee' => $request->tuition_fee,
                'comments' => $request->comments,
                'payment_number' => $request->payment_number,
            ]);


        Toastr::success('student Registration successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('student.dashboard');


    }


    public function howtoregister(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.how-to-registration', $data);
    }

    public function studentsignup(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.student-signup', $data);
    }

    public function newstudentsignup(Request $request){
        $request->validate([
            'phone' => 'required|unique:studentsignups|min:11',
            'email' => 'required|unique:studentsignups|',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',

        ]);
        $signup = new Studentsignup();
        $signup->name = $request->name;
        $signup->email = $request->email;
        $signup->phone = $request->phone;
        $signup->password = Hash::make($request->password);
        $signup->save();

        Toastr::success('student Signup successfully!', 'You Can login now', ["positionClass" => "toast-top-right"]);
        return redirect('/how-to-register');
    }

    public function studentlogin(Request $request){


        $visitorinfo=DB::table('studentsignups')
            ->where('email',$request->name)
            ->orwhere('phone',$request->name)
            ->first();
        if ($visitorinfo){
            $existingPassword = $visitorinfo->password;
            if(password_verify($request->password, $existingPassword)){
                Session::put('studentId',$visitorinfo->id);
                Session::put('studentName',$visitorinfo->name);
                Session::put('studentEmail',$visitorinfo->email);

                $st_dashbrd = DB::table('studentregs')->where('studentId', Session::get('studentId'))->first();
                if($st_dashbrd){

                    return redirect()->route('student.dashboard');
                }
                else{

                    Toastr::success('Login SuccessFully', 'Success', ["positionClass" => "toast-top-right"]);
                return redirect('/student-admission');

                }

            }
            else{
                Toastr::error('Please Check Your Email or Password', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect('/how-to-register');
            }
        }else{

            Toastr::error('Please Check Your Email or Password', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect('/how-to-register');
        }
    }
}
