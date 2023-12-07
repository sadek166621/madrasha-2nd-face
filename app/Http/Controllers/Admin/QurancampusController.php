<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\campusmale;
use App\Models\Admin\campusfemale;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;


class QurancampusController extends Controller
{
    public function edit(){
        $quran_k = campusmale::first();
        return view('admin.quran-campus-male.form', compact('quran_k'));
    }

    public function update(Request $request,$id){

        $quran_k = campusmale::findOrFail($id);

        $quran_k->update([
            'Quran_Reading_Course' => $request->Quran_Reading_Course,
            'Quranic_Arabic_Course' => $request->Quranic_Arabic_Course,
            'Quran_Memorization_Course' => $request->Quran_Memorization_Course,
            'Quran_Reading_Course_a' => $request->Quran_Reading_Course_a,
            'Quranic_Arabic_Course_a' => $request->Quranic_Arabic_Course_a,
            'Quran_Memorization_Course_a' => $request->Quran_Memorization_Course_a,
        ]);
        $quran_k->save();

        Toastr::success('Quran campus updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();

    }

    public function femaleedit(){
        $quran_k = campusfemale::first();
        return view('admin.quran-campus-female.form', compact('quran_k'));
    }
    public function femaleupdate(Request $request, $id){

        $quran_k = campusfemale::findOrFail($id);
        $quran_k->update([
            'Quran_Reading_Course' => $request->Quran_Reading_Course,
            'Quranic_Arabic_Course' => $request->Quranic_Arabic_Course,
            'Quran_Memorization_Course' => $request->Quran_Memorization_Course,
            'Quran_Reading_Course_a' => $request->Quran_Reading_Course_a,
            'Quranic_Arabic_Course_a' => $request->Quranic_Arabic_Course_a,
            'Quran_Memorization_Course_a' => $request->Quran_Memorization_Course_a,
        ]);
        $quran_k->save();

        Toastr::success('Quran campus updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
    
}

