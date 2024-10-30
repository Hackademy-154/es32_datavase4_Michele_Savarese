<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Pest\Plugins\Only;

//implementare interfaccia
class AuthorController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            // 'auth'
            new Middleware('auth', except: ['index','show']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('created_at', 'desc')->get();
        return view('author.index', compact('authors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'pic' => $request->has('pic') ? $request->file('pic')->store('pics', 'public') : null,
        ]);
        return redirect()->route('author.create')->with('success', 'Autore Creato');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        // return view(view: 'author.show', compact('author'));
        return view('author.show', compact('author'));


        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('author.edit', compact('author'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        // dd($author, $request->all());
        if ($request->pic) {
            $author->update([
                'pic' => $request->file('pic')->store('pics', 'public')
            ]);
        }



        $author->update([
            'name' => $request->name,
            'bio' => $request->bio,

            // 'pic'=>$request->has('pic')?$request->file('pic')->store('pics', 'public'): null,
        ]);
        return redirect()->route('author.edit', compact('author'))->with('success', 'Autore modificato');


        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author.index')->with('success', "Autore $author->name rimosso");
        //
    }
}
