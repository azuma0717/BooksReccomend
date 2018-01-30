<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class BookController extends Controller{

    // Start Editpage////////////////////////////////////////////////////////////////////////////
    public function edit(){
      return view('booksEdit');
    }

    // Start Editpage(get book id)///////////////////////////////////////////////////////////////
    public function update($id){
      return view('booksUpdate',array('books'=>DB::table('books')->where('id',$id)->get()));
    }

    // Start update(using bookid)///////////////////////////////////////////////////////////////
    public function update2(Request $req,$id){

      if($req ->hasFile('avatar')){
        $avatar = $req->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/images/'.$filename));
      }

      $user = Auth::user();
      $bName = $req -> input('bName');
      $reason= $req -> input('reason');
      $email = $req -> input('email');

      $checkRegister = array('bName' => $bName,'uName' => $user["name"],'reason' => $reason,'image' => $filename);
      DB::table('books')->where('id',$id)->update($checkRegister);

      return redirect('/edit&'.$id);
    }

    // upload page///////////////////////////////////////////////////////////////////////////////
    public function upload(Request $req){

      if($req ->hasFile('avatar')){
        $avatar = $req->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/images/'.$filename));
      }

      $user = Auth::user();
      $bName = $req -> input('bName');
      $reason= $req -> input('reason');
      $email = $req -> input('email');

      $checkRegister = array('bName' => $bName,'uName' => $user["name"],'uid' => $user["id"],'reason' => $reason,'image' => $filename);
      DB::table('books')->insert($checkRegister);

        return redirect('/');
    }

    // book delete///////////////////////////////////////////////////////////////
     function delete($id){
        DB::table('books')->where('id',$id)->delete();
        return redirect('/');
    }

}
