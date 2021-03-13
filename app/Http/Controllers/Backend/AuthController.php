<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // localhost/projek/public/admin/auth/login
    public function getLogin()
    {
        // if(session('admin_id')) return redirect('/admin/app');
        return view("backend.Auth.login");
    }   

    public function postLogin(Request $request){
        $data = UsersModel::findBy("email", $request->get("email"));
        if ($data->id){

            if(Hash::check($request->password,$data->password)){
                session()->put("admin_id", $data->id);
                return redirect('/admin/app');
            } else {

            //  $password =   Hash::make($request->password);

                return redirect()->back()->with('message','Password salah');
            }
        } else {
            // dd("FALSE");
            return redirect()->back()->with('message','Email salah');
        }
        
    }
    
    public function getLogout(){
        session()->forget("admin_id");
        return redirect('admin/auth/login'); // localhost/projek/public/admin/auth/login
    }

    Public function getApp(Request $request)
    {
        // $session = $request->session()->all();

        // $user = UsersModel::findById($session['admin_id']);

        return view ('layout.app');
    }
}
