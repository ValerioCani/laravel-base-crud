<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.comicslist', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.newComic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required|max:65535',
                'thumb' => 'required|url|max:255',
                'price' => 'required|min:4|max:10',
                'series' => 'required|min:5|max:50',
                'sale_date' => 'required|date_format:Y-m-d',
                'type' => 'required|min:5|max:30'
            ],
            [
                'title.required' => 'SCRIVI QUALCOSA!!',
                'title.max' => 'SCRIVI MENOOOO!!',
                'description.required' => 'SCRIVI QUALCOSA!!',
                'description.max' => 'SCRIVI MENOOOO!!',
                'thumb.required' => 'SCRIVI QUALCOSA!!',
                'thumb.max' => 'SCRIVI MENOOOO!!',
                'price.required' => 'SCRIVI QUALCOSA!!',
                'price.max' => 'SCRIVI MENOOOO!!',
                'series.required' => 'SCRIVI QUALCOSA!!',
                'series.max' => 'SCRIVI MENOOOO!!',
                'sale_date.required' => 'SCRIVI QUALCOSA!!',
                'sale_date.max' => 'SCRIVI MENOOOO!!',
                'type.required' => 'SCRIVI QUALCOSA!!',
                'type.max' => 'SCRIVI MENOOOO!!',
            ]
        );

        $data = $request->all();

        $newComic = new Comic();

        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if($comic){
            return view('comics.showComic', compact('comic'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if($comic){
            return view('comics.editComic', compact('comic'));
        }else{
            abort(404);
        }

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
        $data = $request->validate(
            [
            'title' => 'required|max:100',
            'description' => 'required|max:65535',
            'thumb' => 'required|url|max:255',
            'price' => 'required|min:4|max:10',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|min:5|max:30'
            ]
        );

        $comic = Comic::find($id);
        if($comic){
            $data = $request->all();
            $comic->update($data);
            $comic->save();

            return redirect()->route('comics.index');
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        if($comic){
            $comic->delete();
            return redirect()->route('comics.index');
        }else{
            abort(404);
        }

    }
}
