<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
      private function validateData($data)
      {
            Validator::make($data, [
                  'title' => 'required|min:5|max:255',
                  'series' => 'required|min:5|max:255',
                  'type' => 'required|min:5|max:255',
                  'sale_date' => 'date|after_or_equal:2000-01-01|before_or_equal:2024-12-12',
                  'price' => 'required|min:1|max:999|decimal:2',
            ])->validate();
      }

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
            $comics = Comic::all();
            return view('comics.index', compact('comics'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
            return view('comics.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
            $data = $request->all();

            $this->validateData($data);

            // $newComic = Comic::create($data);      col mass assignment potrei creare così 

            $newComic = new Comic();
            $newComic->title = $data['title'];
            $newComic->description = $data['description'];
            $newComic->thumb = $data['thumb'];
            $newComic->price = $data['price'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];
            $newComic->save();

            return redirect()->route('comics.index');
            // return redirect()->route('comics.show', $newComic->id);      in caso si voglia fare redirect nella pagina del prodotto
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
            $comic = Comic::findOrFail($id);
            return view('comics.show', compact('comic'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
            $comic = Comic::findOrFail($id);
            return view('comics.edit', compact('comic'));
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
            $comic = Comic::findOrFail($id);
            $data = $request->all();

            $this->validateData($data);

            $comic->update($data);
            return redirect()->route('comics.index');
            // return redirect()->route('comics.show', $comic->id);
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
            $comic = Comic::findOrFail($id);
            $comic->delete();
            return redirect()->route('comics.index');
      }
}
