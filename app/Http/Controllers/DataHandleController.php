<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return "Tham số vừa truyền lên là  $id ";
    }

    public function handleQueryString(Request $request){
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $data =[
            'firstName' =>$firstName,
            'lastName' =>$lastName,
            'email' =>$email
        ];
        return view('datahandle',$data);
    }

    public function handleForm(){
        return view('form-data');
    }

    public function processForm(Request $request){
        $data = $request->all();
        return view('form-success',$data);
    }
}
