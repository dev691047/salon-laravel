<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointments;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

        public function appointment(Request $request){
        $data = new appointment;
        $data->firstname-$request->firstname;
        $data->lastname-$request->lastname;
        $data->email-$request->email;
        $data->date-$request ->date;
        $data->phone->$request->phone;
        $data->comment-$request->comment;
        $data->status="in progress";

        $data->save();
        // return redirect()->back();
        }

    }

