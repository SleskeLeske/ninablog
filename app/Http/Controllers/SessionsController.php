<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use App\Mail\VerificationEmail;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
         'email' => 'required|exists:users',
         'password' => 'required'
     ];

     $input = Input::only('email', 'password');

     $validator = Validator::make($input, $rules);

     if($validator->fails())
     {
         return redirect()->back()->withInput()->withErrors($validator);
     }

     $credentials = [
         'email' => Input::get('email'),
         'password' => Input::get('password'),
     ];

     if ( ! Auth::attempt($credentials))
     {
         return redirect()->back()
             ->withInput()
             ->withErrors([
                 'credentials' => 'Brukernavn eller passord er feil'
             ]);
     }

    return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  /*  public function show(Request $request) {
      $user = Auth::user();
      return view('auth.user', compact('user'));
    }*/

    public function logout(Request $request) {
      Auth::logout();
      $categories = Category::all();
      return view('front.main', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
