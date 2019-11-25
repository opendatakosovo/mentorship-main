<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 11/12/2019
 * Time: 8:40 PM
 */

namespace App\Http\Controllers;




use App\Certificates;
use App\Client;
use App\Http\Requests\UploadRequest;
use App\User;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{

    public function application_store(Request $request){
//      $data = $request->all();
       $requests = $request->all();

       foreach($requests as $key => $req){
           if(substr( $key, 0, 5 ) === "skill"){
               $skills[$key] = array(
                   'skill' => $key,
                   'value' => $req
               );
           }
       }

//       var_dump($request->langs);
//       die();

        Client::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'sex' => $request->sex,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'address' => $request-> address,
            'city' => $request->city,
            'district' => $request->district,
            'state' => $request->state,
            'country' => $request->country,
            'company_organization' => $request->company_organization,
            'background_field_of_study' => $request->background_field_of_study,
            'qualification' => $request->qualification,
            'web' => $request->web,
            'university' => $request->university,
            'languages' => serialize($request->langs),
            'general_info' => $request->general_info,
            'skills' => serialize($skills)
        ]);


        return view('thank-you');

    }

    public function thanks(){
        return view('thank-you');
    }

    public function store_certificates($id){

        $user = Client::find($id);

       $data = array(
           "mentor_id" => $id,
           "user" => $user
       );

        return view('certificates_upload')->with('data',$data);


    }

    public function upload(Request $request){

        foreach ($request->file('files') as $photo) {
            $filename = $photo->store('certificates/'.$request->mentor_id);
            Certificates::create([
                'mentor_id' => $request->mentor_id,
                'filename' => $filename
            ]);
        }
        return view('thank-you');
    }

    public function getDownload($id,$name)
    {

        //PDF file is stored under project/public/download/info.pdf
        $file= storage_path(). "/app/certificates/".$id."/".$name."";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'Certificate.pdf', $headers);
    }


    public function upload_user_files(Request $request){

        foreach ($request->file('files') as $photo) {

            $filename = $photo->store('certificates/'.$request->mentor_id);

            Certificates::create([
                'mentor_id' => $request->mentor_id,
                'filename' => $filename
            ]);
        }

        return redirect('/admin/user/client');
    }
}

