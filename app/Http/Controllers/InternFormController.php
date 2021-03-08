<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\intern_detail;
use App\Mail\ForAdmin;
use Illuminate\Support\Facades\Mail;

class InternFormController extends Controller
{
    function addIntern(Request $req){

        $intern = new intern_detail;
        $intern->full_name=$req->full_name;
        $intern->gender=$req->gender;
        $intern->age=$req->age;
        $intern->dob=$req->dob;
        $intern->contact=$req->contact;
        $intern->email=$req->email;
        $intern->type=$req->type;

        $acceptedext=array("pdf");
        $resume=$req->file('resume');
        $extension=$req->file('resume')->extension();
        $file_name=$resume->getClientOriginalName();
        if (!in_array($extension , $acceptedext)) {
            echo "Upload resume in PDF format only.";
        }else{
            $resume->move('uploads',$file_name);
            $intern->resume=$file_name;
            $intern->save();
            Mail::to('darshan.mahajan77777@gmail.com')->send(new foradmin());
            echo "Form Uploaded Successfully";
        }

    }
}
