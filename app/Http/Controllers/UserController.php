<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return response()->json(
            ["user" => User::orderBy('id',"desc")->get()]
        );
    }

    public function store(Request $request){
        User::create([
            "username" => $request->username,
            "password" => User::hash_password($request->password),
            "password_confirmation" => true,
            "email" => $request->email,
            "alamat" => $request->alamat,
        ]);
        return response()->json([
            "success" => "data berhasil di tambahkan "
        ], 402);
    }

    public function findByid($id){
        return response()->json(User::find($id));
    }

    public function update(Request $request, $id){
        User::where('id',$id)->update([
            "username" => $request->username,
            "password" => User::hash_password($request->password),
            "password_confirmation" => true,
            "email" => $request->email,
            "alamat" => $request->alamat,
        ]);
        return response()->json([
            "success" => "data berhasil di update"
        ], 402);
    }

    public function delete($id){
        User::find($id)->delete();
        return response()->json([
            "success" => "data berhasil di hapus"
        ], 402);
    }
}
