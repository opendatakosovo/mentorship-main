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

        Client::create($request->all());

        return redirect('/');

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
        return 'Upload successful!';
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
}

