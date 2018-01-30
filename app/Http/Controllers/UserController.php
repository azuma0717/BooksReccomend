<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class UserController extends Controller{

    // Start LoginPage
    public function profile(){
      return view('profile',array('user'=>Auth::user()));
    }

    public function update(Request $req){

      if($req ->hasFile('avatar')){
        $avatar = $req->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/'.$filename));
      }

      $user = Auth::user();
      $name = $req -> input('name');
      $email = $req -> input('email');

      $checkRegister = array('name' => $name,'email' => $email, 'avatar' => $filename);
      DB::table('users')->where('id',$user["id"])->update($checkRegister);

      return redirect('/profile');

    }

}
