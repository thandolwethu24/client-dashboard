<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AxxessController extends Controller
{
    public function axxessapi(){

        $data = [
            'id' => '3',
            'first_name' => 'Thandolwethu',
            'last_name' => 'Speelman',
            'mobile_number' => '0738032825',
            'email_address' => 'thandolwethus@internet.co.za'
        ];

        return response()->json($data);
    }

    public function showapi(){
        $apply = Applicant::all();
        return response()->json($apply);
    }

    public function show($id){
        $application = Applicant::find($id);

        return response()->json($application);
    }


}
