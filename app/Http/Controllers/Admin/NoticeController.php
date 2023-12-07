<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Notice;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['notices'] = Notice::latest()->get();

        return view('admin.notice.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.form');
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
            'title' => 'required',
            'type' => 'required',
            'notice_file' => 'required|mimes:pdf,jpg,png|max:10000',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $title_short = substr($request->title,0,30);
        //dd($title_short);

        $notice = Notice::create([
            'title' => $request->title,
            // 'slug' => $title_short,
            'type' => $request->type,
            'description' => $request->description,
            'status' => $request->status
        ]);

        $file = $request->file('notice_file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/notices')) {
                mkdir('assets/files/uploads/notices', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/notices'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/notices', $fileName);

            $file = $fileName;
        }

        $notice->file = $file;
        $notice->save();

        Toastr::success('Notice added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.notice.list');
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
        $data['notice'] = Notice::findOrFail($id);

        if($data['notice']){
            return view('admin.notice.form', $data);
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
        $notice = Notice::findOrFail($id);

        if($notice){
            $validated = $request->validate([
                'title' => 'required',
                'type' => 'required',
                'notice_file' => 'nullable|mimes:pdf,jpg,png|max:10000',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $notice->update([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
                'status' => $request->status
            ]);

            $filename = $notice->file;
            $file = $request->file('notice_file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/notices')) {
                    mkdir('assets/files/uploads/notices', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/notices'), $filename);
                //$file->move(base_path().'/assets/files/uploads/notices', $filename);
            }

            $notice->file = $filename;
            $notice->save();

            Toastr::success('Notice updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.notice.list');
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
        $notice = Notice::findOrFail($id);

        if($notice){
            $notice->delete();
            Toastr::success('Notice deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
