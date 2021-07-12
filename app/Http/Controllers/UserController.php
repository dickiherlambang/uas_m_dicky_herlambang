<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sysuser;
use App\sysmenu;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        $data_user = sysuser::orderBy('id', 'desc')->get();
        return view('master.user', ['data_user' => $data_user, 'data_menu' => $categories]);
        //return view('master.user');
    }

    public function tambah(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        return view('master.useradd', ['data_menu' => $categories]);
    }

    public function simpan(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        $data_user = sysuser::orderBy('id', 'desc')->get();
        $user = new sysuser;
        $user->namalengkap = $request->txtnama;
        $user->email = $request->txtemail;
        $user->uname = $request->txtuname;
        $user->upass = bcrypt($request->txtupass);
        $user->save();
        return view('master.user', ['data_user' => $data_user, 'data_menu' => $categories]);
    }

    public function edit(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        $id = $request->id;
        $data = sysuser::where('id', $id)->first();
        return view('master.useredit', ['user' => $data, 'data_menu' => $categories]);
    }


    public function update(Request $request)
    {
        $categories = sysmenu::where('sysmenu_id', '=', '0')
            ->with('childrenCategories')
            ->get();
        $data_user = sysuser::orderBy('id', 'desc')->get();
        $id        = $request->txtid;
        $sysuser = new sysuser;
        $sysuser->where('id', $id)
            ->update([
                'namalengkap' => $request->txtnama,
                'email' => $request->txtemail,
                'uname' => $request->txtuname,
                'upass' => $request->txtupass,
            ]);
        return view('master.user', ['data_user' => $data_user, 'data_menu' => $categories]);
    }
}
