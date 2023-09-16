<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Http\Requests\StoremoviesRequest;
use App\Http\Requests\UpdatemoviesRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.data')->with([
            'movies' => Movies::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremoviesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremoviesRequest $request)
    {
        $data = new Movies();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets'), $filename);
            $data->file = $filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function view($id)
    {
        $movie = Movies::find($id);
        if (!$movie) {
            abort(404);
        }
        return view('movies.view', compact('movie'));
    }
    public function destroy($id){
        $movie = Movies::find($id);
        if (!$movie) {
            abort(404);
        }
        $movie->delete();
        return redirect()->back()->with('success', 'Movie deleted successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemoviesRequest  $request
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemoviesRequest $request, movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
}
