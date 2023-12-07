<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Weekly;
use Toastr;
use Carbon\Carbon;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Weekly'] = Weekly::latest()->get();

        return view('admin.weekly.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.weekly.form');
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
            'class' => 'required',
            'link' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $online = Weekly::create([
            'class' => $request->class,
            'section' => $request->section,
            'link' => $request->link,
            'status' => $request->status
        ]);

        $online->save();

        Toastr::success('Added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.weekly.list');
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
        $data['Weekly'] = Weekly::findOrFail($id);

        if($data['Weekly']){
            return view('admin.weekly.form', $data);
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
        $online = Weekly::findOrFail($id);
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
            Toastr::success(' Update successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.weekly.list');
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
        $online = Weekly::findOrFail($id);

        if($online){
            $online->delete();
            Toastr::success(' deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
