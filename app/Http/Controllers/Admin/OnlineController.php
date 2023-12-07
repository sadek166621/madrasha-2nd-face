<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\onlineclass;
use App\Models\Curriculum;
use Toastr;
use Carbon\Carbon;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['onlineclass'] = onlineclass::latest()->get();

        return view('admin.online-class.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.online-class.form');
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
            'class' => 'required',
            'link' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $online = onlineclass::create([
            'class' => $request->class,
            'section' => $request->section,
            'link' => $request->link,
            'status' => $request->status
        ]);

        $online->save();

        Toastr::success('Online Class added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.online.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['onlineclass'] = onlineclass::findOrFail($id);

        if($data['onlineclass']){
            return view('admin.online-class.form', $data);
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
        $online = onlineclass::findOrFail($id);
        if($online){
            $validated = $request->validate([
                'class' => 'required',
                'link' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $online->update([
                'class' => $request->class,
                'section' => $request->section,
                'link' => $request->link,
                'status' => $request->status
            ]);

            $online->save();
            Toastr::success('Online Class Update successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.online.list');
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
        $online = onlineclass::findOrFail($id);

        if($online){
            $online->delete();
            Toastr::success('Notice deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
    public function curriculumindex(){
        $data['onlineclass'] = Curriculum::latest()->get();

        return view('admin.curriculum.list', $data);
    }
    public function curriculumcreate(){
        return view('admin.curriculum.form');
    }
    public function curriculumstore(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }
        $file = $request->file('link');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/curriculum')) {
                mkdir('assets/files/uploads/curriculum', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/curriculum'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/notices', $fileName);

            $file = $fileName;
        }
        $online = Curriculum::create([
            'title' => $request->title,
            'link' => $file,
            'status' => $request->status
        ]);

        $online->save();

        Toastr::success('Curriculum added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.curriculum.list');
    }
    public function curriculumedit($id)
    {
        $data['onlineclass'] = Curriculum::findOrFail($id);

        if($data['onlineclass']){
            return view('admin.curriculum.form', $data);
        }

        return back();
    }
    public function curriculumupdate(Request $request, $id)
    {
        $online = Curriculum::findOrFail($id);
        if($online){
            $validated = $request->validate([
                'title' => 'required',
                'link' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }
            $filename = $online->link;
            $file = $request->file('link');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/curriculum')) {
                    mkdir('assets/files/uploads/curriculum', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/curriculum'), $filename);
                //$file->move(base_path().'/assets/files/uploads/notices', $filename);
            }
            $online->update([
                'title' => $request->title,
                'link' => $filename ,
                'status' => $request->status
            ]);

            $online->save();
            Toastr::success('Curriculum Update successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.curriculum.list');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function curriculumdestroy($id)
    {
        $online = Curriculum::findOrFail($id);

        if($online){
            $online->delete();
            Toastr::success('Curriculum deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
