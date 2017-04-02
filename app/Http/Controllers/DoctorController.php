<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor; //to dodalismy zeby korzystalo z bazy sql
use App\Http\Requests;

class DoctorController extends Controller
{
    //
    public function show(){
       $doctors = Doctor::all(); //to nam spowoduje pokazanie wszystkich lekarzy ktorych mamy w bazie
       return response()->json($doctors); //zwracamy liste jsonem
    }
    public function get(){
        $id = request()->route("id");
        $doctor = Doctor::find($id); //znajdujemy doktora po ID
        return response()->json($doctor); //i tak jak w poprzednim przypadku zwracamy jsonem obiekt
    }
    public function getAppointments(){
        $id = request()->route("id");
        $doctor = Doctor::find($id); //znajdujemy doktora po ID
        return response()->json($doctor->appointments);
    }
}
