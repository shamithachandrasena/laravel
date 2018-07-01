<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * View User Update Page
     * @param $id - User ID
     * @return $this
     */
    public function user_update($id)
    {

        $user = User::with('userDetail')->where('id', $id)->first();
        return view("user_update")->with(["user" => $user]);
        //->first()
    }

    /**
     * View User Update Page
     * @param Request $request
     * @param $id - User ID
     */
    public function user_update_post(Request $request, $id)
    {
        $inputs = $request->input();
        dd($inputs);
        // Not Complete Yet
    }
}
