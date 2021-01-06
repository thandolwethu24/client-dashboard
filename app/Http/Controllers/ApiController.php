<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function create(Request $request){
        $applicants = new Applicant();

        $applicants->first_name = $request->input('first_name');
        $applicants->last_name = $request->input('last_name');
        $applicants->mobile_number = $request->input('mobile_number');
        $applicants->email_address = $request->input('email_address');

        $applicants->save();
        return response()->json($applicants);
    }

    public function receive(Request $request){
        $applicant = Applicant::all();
        return response()->json($applicant);
    }

    public function basic(){
        $applicant = [
            'username ' => 'applicant',
            'pass' => 'canCode'
        ];
        return response()->json($applicant);
    }
}
