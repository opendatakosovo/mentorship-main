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
use App\Mail\NewUserEmail;
use App\Mail\Upload_certificate_email;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ApplicationsController extends Controller
{

 public function application_store(Request $request)
 {
  //      $data = $request->all();
  $requests = $request->all();

  foreach ($requests as $key => $req) {
   if (substr($key, 0, 5) === "skill") {
    $skills[$key] = array(
     'skill' => $key,
     'value' => $req,
    );
   }
  }
  if ($request->file('cv_upload')) {
   $filename = $request->file('cv_upload')->store('cv/' . $request->email);
  }
  //       var_dump($request->langs);
  //       die();

  $id = Client::create([
   'name' => $request->name,
   'lastname' => $request->lastname,
   'email' => $request->email,
   'sex' => $request->sex,
   'mobile' => $request->mobile,
   'phone' => $request->phone,
   'address' => $request->address,
   'city' => $request->city,
   'district' => $request->district,
   'state' => $request->state,
   'country' => $request->country,
   'company_organization' => $request->company_organization,
   'background_field_of_study' => $request->background_field_of_study,
   'qualification' => $request->qualification,
   'web' => $request->web,
   'university' => $request->university,
   'cv' => $filename,
   'languages' => serialize($request->langs),
   'general_info' => $request->general_info,
   'skills' => serialize($skills),
  ]);

  if ($id) {
   $superadmins = DB::table('users')
    ->select(DB::raw('email'))
    ->join('role_user', 'role_user.user_id', '=', 'users.id')
    ->where('role_id', 1)
    ->get();

   foreach ($superadmins as $supers) {
    Mail::to($supers->email)->send(new NewUserEmail($request['email'], $request['name'], $request['lastname'], $request['city'], $request['background_field_of_study']));
   }
  }
  return view('thank-you');

 }

 public function thanks()
 {
  return view('thank-you');
 }

 public function store_certificates($id)
 {

  $user = Client::find($id);

  $data = array(
   "mentor_id" => $id,
   "user" => $user,
  );

  return view('certificates_upload')->with('data', $data);

 }

 public function upload(Request $request)
 {

  foreach ($request->file('files') as $photo) {
   $filename = $photo->store('certificates/' . $request->mentor_id);
   $file_names[] = $photo->originalName;
   Certificates::create([
    'mentor_id' => $request->mentor_id,
    'filename' => $filename,
   ]);
  }
  $mentor_name = get_mentor_name($request->mentor_id);

  $superadmins = DB::table('users')
   ->select(DB::raw('email'))
   ->get();

  foreach ($superadmins as $supers) {
   Mail::to($supers->email)->send(new Upload_certificate_email($mentor_name, $file_names));
  }
  return view('thank-you');
 }

 public function getDownload($id, $name)
 {

  //PDF file is stored under project/public/download/info.pdf
  $file = storage_path() . "/app/certificates/" . $id . "/" . $name . "";

  $headers = array(
   'Content-Type: application/pdf',
  );

  return response()->download($file, 'Certificate.pdf', $headers);
 }

 public function getDownloadCV($email, $name)
 {
  //PDF file is stored under project/public/download/info.pdf
  $file = storage_path() . "/app/cv/" . $email . "/" . $name . "";

  $headers = array(
   'Content-Type: application/pdf',
  );

  return response()->download($file, 'CV-' . $email . '.pdf', $headers);
 }

 public function upload_user_files(Request $request)
 {

  foreach ($request->file('files') as $photo) {

   $filename = $photo->store('certificates/' . $request->mentor_id);

   Certificates::create([
    'mentor_id' => $request->mentor_id,
    'filename' => $filename,
   ]);
  }

  return redirect('/admin/user/client');
 }

 public function get_project(Request $request)
 {
  $project_id = $request->id;

  $project_data = DB::table('projects')
   ->select(DB::raw('*'))
   ->where('id', $project_id)
   ->get();

  foreach ($project_data as $project) {
   $project_result = $project;
  }

  return json_encode($project_result);
 }

 public function admin_update_cv(Request $request)
 {

  $id = $request->client_id;
  $user = Client::find($id);
  var_dump($id);
  die();
  if ($request->file('cv_upload_update')) {
   //    $filename = $request->file('avatar')->storeAs(
   //     'cv/' . $request->email, $request->user()->id
   //    );
   $filename = $request->file('cv_upload_update')->store('cv/' . $request->email);
  }

//   DB::table('clients')
  //    ->where('id', $id)
  //    ->update(['cv' => $filename]);

    return redirect('/admin/user/client');

 }

}
