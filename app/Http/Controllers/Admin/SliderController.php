<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;
use Toastr;
use Carbon\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::latest()->get();

        return view('admin.slider.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $validated = $request->validate([
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

            if (!file_exists('assets/images/uploads/sliders')) {
                mkdir('assets/images/uploads/sliders', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/sliders'), $imageName);

            $image = $imageName;
        }

        $slider = Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_link' => $request->button_link,
            'button_text' => $request->button_text,
            'image' => $image,
            'status' => $request->status,
        ]);

        Toastr::success('Slider added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.slider.list');
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
        $data['slider'] = Slider::findOrFail($id);

        if($data['slider']){
            return view('admin.slider.form', $data);
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
        $slider = Slider::findOrFail($id);

        if($slider){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $imageName = $slider->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/sliders')) {
                    mkdir('assets/images/uploads/sliders', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/sliders'), $imageName);

                //$image = $imageName;
            }

            $slider->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                'image' => $imageName,
                'status' => $request->status,
            ]);

            Toastr::success('Slider updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return redirect()->route('admin.slider.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if($slider){
            $slider->delete();
        }

        return back();
    }
}
