<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['location']) && $_GET['location']>0){
            $data['staffs'] = Staff::where('location_id', $_GET['location'])->latest()->get();
        }else{
            $data['staffs'] = Staff::latest()->get();
        }
        $data['locations'] = Location::where('status',1)->latest()->get();

        return view('admin.staff.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['locations'] = Location::where('status',1)->latest()->get();
        return view('admin.staff.form', $data);
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
            'name' => 'required',
            'location_id' => 'required',
            'designation' => 'required',
            'class' => 'required',
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

            if (!file_exists('assets/images/uploads/staffs')) {
                mkdir('assets/images/uploads/staffs', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/staffs'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/staffs', $imageName);

            $image = $imageName;
        }

        $staff = Staff::create([
            'name' => $request->name,
            'username' => Str::slug($request->name).Str::random(6),
            'location_id' => $request->location_id,
            'designation' => $request->designation,
            'phone' => $request->phone,
            'email' => $request->email,
            'join_date' => $request->join_date,
            'address' => $request->address,
            'image' => $image,
            'class' => $request->class,
            'status' => $request->status,
        ]);

        Toastr::success('Staff added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.staff.list');
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
        $data['staff'] = Staff::findOrFail($id);

        if($data['staff']){
            $data['locations'] = Location::where('status',1)->latest()->get();
            return view('admin.staff.form', $data);
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
        $staff = Staff::findOrFail($id);

        if($staff){
            $validated = $request->validate([
                'name' => 'required',
                'location_id' => 'required',
                'designation' => 'required',
                'class' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $staff->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/staffs')) {
                    mkdir('assets/images/uploads/staffs', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/staffs'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/staffs', $imageName);

                $target_image = $imageName;
            }

            if(strcmp($staff->name, $request->name) == 0) {
                $username = $staff->username;
            }else{
                $username = Str::slug($request->name).Str::random(6);
            }

            $staff->update([
                'name' => $request->name,
                'username' => $username,
                'location_id' => $request->location_id,
                'designation' => $request->designation,
                'phone' => $request->phone,
                'email' => $request->email,
                'join_date' => $request->join_date,
                'address' => $request->address,
                'image' => $target_image,
                'class' => $request->class,
                'status' => $request->status,
            ]);

            Toastr::success('Staff updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.staff.list');
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
        $staff = Staff::findOrFail($id);

        if($staff){
            $staff->delete();
            Toastr::success('Staff deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
