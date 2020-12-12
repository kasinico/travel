<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  int $id \Illuminate\Http\Request  $request
     * @return Response \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
