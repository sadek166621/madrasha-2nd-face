<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Setting;
use App\Models\Admin\studentreg;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panel()
    {
        //$data['gateways'] = Gateway::where('status', 1)->get();
        //$data['purchase_tokens'] = PurchaseToken::where('user_id', Auth::user()->id)->get();

        //dd($data);

        //return view('panel.index', $data);
        return view('panel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        // $validated = $request->validate([
        //     'token_amount' => 'required',
        //     'gateway_id' => 'required',
        //     'conversion_rate' => 'required',
        //     'conversion_amount' => 'required',
        //     'wallet_address' => 'required',
        // ]);

        // PurchaseToken::create([
        //     'token_amount' => $request->token_amount,
        //     'user_id' => Auth::user()->id,
        //     'gateway_id' => $request->gateway_id,
        //     'conversion_rate' => $request->conversion_rate,
        //     'conversion_amount' => $request->conversion_amount,
        //     'wallet_address' => $request->wallet_address,
        // ]);

        Toastr::success('Purchase recorded successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return back();
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
        //
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
    }

    public function getGateway($id){

    }

    public function site_edit()
    {
        $setting = Setting::first();

        if($setting){
            return view('admin.settings.form',compact('setting'));
        }

        return back();
    }

    public function site_update(Request $request, $id)
    {
        // return $request;
        $setting = Setting::findOrFail($id);

        if($setting){
            $setting->update([
                'site_name' => $request->site_name,
                'site_title' => $request->site_title,
                'site_tagline' => $request->site_tagline,
                'site_contact_no' => $request->site_contact_no,
                'site_email' => $request->site_email,
                'site_address' => $request->site_address,
                'google_map_link' => $request->google_map_link,
                'youtube_video_left_link' => $request->youtube_video_left_link,
                'youtube_video_right_link' => $request->youtube_video_right_link,
                'site_meta_title' => $request->site_meta_title,
                'site_meta_description' => $request->site_meta_description,
                'vice_principal_name' => $request->vice_principal_name,
                'vice_principal_bio' => $request->vice_principal_bio,
                'vice_principal_message' => $request->vice_principal_message,
                'principal_name' => $request->principal_name,
                'principal_bio' => $request->principal_bio,
                'principal_message' => $request->principal_message,
                'important_link_text_1' => $request->important_link_text_1,
                'important_link_1' => $request->important_link_1,
                'important_link_text_2' => $request->important_link_text_2,
                'important_link_2' => $request->important_link_2,
                'important_link_text_3' => $request->important_link_text_3,
                'important_link_3' => $request->important_link_3,
                'important_link_text_4' => $request->important_link_text_4,
                'important_link_4' => $request->important_link_4,
                'important_link_text_5' => $request->important_link_text_5,
                'important_link_5' => $request->important_link_5,
                'important_link_text_6' => $request->important_link_text_6,
                'important_link_6' => $request->important_link_6,
                'important_link_text_7' => $request->important_link_text_7,
                'important_link_7' => $request->important_link_7,
                'important_link_text_8' => $request->important_link_text_8,
                'important_link_8' => $request->important_link_8,
                'contact' => $request->contact,
                'message_from_1' =>$request->message_from_1,
                'message_from_2' =>$request->message_from_2,
            ]);

            $logo = $setting->site_logo;
            $image = $request->file('site_logo');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                $logo = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image->move(public_path('assets/images/uploads/settings'), $logo);
                // $image->move(base_path().'/assets/images/uploads/settings', $logo);

            }
            $setting->site_logo = $logo;

            $icon = $setting->site_icon;
            $image_icon = $request->file('site_icon');
            if($image_icon){
                $currentDate = Carbon::now()->toDateString();
                $icon = $currentDate.'-'.uniqid().'.'.$image_icon->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image_icon->move(public_path('assets/images/uploads/settings'), $icon);
                // $image_icon->move(base_path().'/assets/images/uploads/settings', $icon);

            }
            $setting->site_icon = $icon;

            $vc_image = $setting->vice_principal_image;
            $image = $request->file('vice_principal_image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                $vc_image = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image->move(public_path('assets/images/uploads/settings'), $vc_image);
                // $image->move(base_path().'/assets/images/uploads/settings', $vc_image);

            }
            $setting->vice_principal_image = $vc_image;

            $image_name = $setting->principal_image;
            $image = $request->file('principal_image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                $image_name = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


                if (!file_exists('assets/images/uploads/settings')) {
                    mkdir('assets/images/uploads/settings', 0777, true);
                }
                $image->move(public_path('assets/images/uploads/settings'), $image_name);
                // $image->move(base_path().'/assets/images/uploads/settings', $image_name);

            }
            $setting->principal_image = $image_name;

            $setting->save();

            Toastr::success('Settings updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

    public function appliedview(){
        $studentregs = studentreg::latest()->get();
        return view('admin.applied-student.view', compact('studentregs'));
    }

    public function applieddetails($id){
        $studentregs = studentreg::find($id);
        return view('admin.applied-student.details', compact('studentregs'));

    }
}
