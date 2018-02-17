<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $art = Art::all();
        return view('admin.art.index', compact('art'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.art.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formInput = $request->except('image');

      $this->validate($request, [
        'title' => 'required',
        'image' => 'image|mimes:png,jpg,jpeg|max:10000',
      ]);

      $image = $request->image;
      if($image){
        $imageName = $image->getClientOriginalName();
        $image->move('img', $imageName);
        $formInput['image'] = $imageName;
      }

      Art::create($formInput);
      return view('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
      Art::destroy($id);
    }
}
