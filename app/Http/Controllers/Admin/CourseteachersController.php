<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Teacher;
use App\Models\Admin\Cteachers;
use App\Models\Admin\Course;
use Toastr;
class CourseteachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //  ====================== Course Teachers========================

    public function index()
    {
        // $course = DB::table('cteachers')
        // ->join('courses','')
        $data['courseteachers'] = Cteachers::latest()->get();
        return view('admin.course-teachers.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses'] = Course::latest()->get();
        $data['teachers'] = Teacher::latest()->get();
        return view('admin.course-teachers.form',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'course_id' => 'required',
            'teacher_id' => 'required',
        ]);

        if ($teachers=$request->teacher_id ){
            foreach ($teachers as $teacher){
                $courseteachers = new Cteachers();
                $courseteachers->course_id = $request->course_id;
                $courseteachers->teacher_id = $teacher;
                $courseteachers->save();
            }
        }

        Toastr::success('Course-Teachers added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.course-teachers.list');
        // return back();
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
        $data['courses'] = Course::latest()->get();
        $data['teachers'] = Teacher::latest()->get();
        $data['courseteachers'] = Cteachers::findOrFail($id);

        if($data['courseteachers']){
            return view('admin.course-teachers.form', $data);
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
        $courseteacher = Cteachers::findOrFail($id);

        if($courseteacher){
            $validated = $request->validate([
                'course_id' => 'required',
                'teacher_id' => 'required',
            ]);



            if ($teachers=$request->teacher_id ){
                foreach ($teachers as $teacher){
                    $courseteacher->update([
                        'course_id' => $request->course_id,
                        'teacher_id' => $teacher
                    ]);
                }
            }
            else{
                $courseteacher->update([
                    'course_id' => $request->course_id,
                ]);
            }

            Toastr::success('Course-Teacher updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.course-teachers.list');
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
        $courseteacher = Cteachers::findOrFail($id);

        if($courseteacher)
        {
            $courseteacher->delete();
            Toastr::success('Course-Teacher deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }
        return back();
    }

    // ===================End Course Teachers========================



    // ---------------------Course-------------------------



    public function courseindex()
    {
        $data['courses'] = Course::latest()->get();

        return view('admin.course.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursecreate()
    {
        return view('admin.course.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function coursestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $course = Course::create([
            'name' => $request->name,
            'status' => $request->status
        ]);

        Toastr::success('Course added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.course.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function courseshow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function courseedit($id)
    {
        $data['course'] = Course::findOrFail($id);

        if($data['course']){
            return view('admin.course.form', $data);
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
    public function courseupdate(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        if($course){
            $validated = $request->validate([
                'name' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $course->update([
                'name' => $request->name,
                'status' => $request->status
            ]);

            Toastr::success('Course updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.course.list');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function coursedestroy($id)
    {
        $course = Course::findOrFail($id);

        if($course){
            $course->delete();
            Toastr::success('Course deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

    // -----------------------End Course-----------------
}
