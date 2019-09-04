<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero;
use Illuminate\Support\Facades\Storage;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheroes = Superhero::paginate(5);

        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nickname'=>'required',
            'real_name'=>'required',
            'superpowers'=>'required'
        ]);
        $superheroes = new Superhero([
            'nickname' => $request->get('nickname'),
            'real_name' => $request->get('real_name'),
            'origin_description' => $request->get('origin_description'),
            'superpowers' => $request->get('superpowers'),
            'catch_phrase' => $request->get('catch_phrase'),
            'img' => $request->get('img'),

        ]);
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('upload'), time().'_'.$f->getClientOriginalName());
            }
        }


        $superheroes->save();
        return redirect('/superheroes')->with('success', 'Superhero saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superheroes = Superhero::find($id);
        return view('superheroes.edit', compact('superheroes'));
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
        $request->validate([
            'nickname'=>'required',
            'real_name'=>'required',
            'superpowers'=>'required'
        ]);
        $superheroes =  Superhero::find($id);
        $superheroes -> nickname = $request->get('nickname');
          $superheroes ->   real_name  = $request->get('real_name');
           $superheroes ->  origin_description  = $request->get('origin_description');
            $superheroes -> superpowers = $request->get('superpowers');
            $superheroes -> catch_phrase = $request->get('catch_phrase');
            $superheroes -> img = $request->get('img');


        $superheroes->save();
        return redirect('/superheroes')->with('success', 'Superhero updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superheroes = Superhero::find($id);
        $superheroes->delete();

        return redirect('/superheroes')->with('success', 'Superhero deleted!');
    }
}
