<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Storage;

class ArticlesController extends Controller
{
    //Calls middleware.Authenticate, protects from accessing the /home if authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // to be added paginate para malimit yung i show na data
        //Get all data from database through the model in order from latest record descending
        $articles = Articles::latest()->get();      
        
        //Pass database data to adminMain.blade.php for display
        return view('layouts.adminMain', [
          'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //For routing...
        return view('layouts.createArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check submitted inputs if valid/not null
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'tags' => 'required',
            'author' => 'required',
            'coverImage' => 'image|required|max:1999',
            'content' => 'required'
        ]);

        //Store submitted cover image of article to storage/images and take the image path
        $imagePath = $request->file('coverImage')->store('images', 'public');

        //New instance of Articles object from model
        $article = new Articles();

        //Assign each submitted data to Articles object
        $article->title = request('title');
        $article->subtitle = request('subtitle');
        $article->tags = request('tags');
        $article->author = request('author');
        $article->coverImage = $imagePath;
        $article->content = request('content');

        //Save to database
        $article->save();

        return redirect()->action([ArticlesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        return view('adminShowArticle',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */

    // on progress
    public function edit(Articles $article)
    {
        return view('layouts.updateArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $article)
    {
        //Check submitted inputs if valid/not null
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'tags' => 'required',
            'author' => 'required',
            'coverImage' => 'image|required|max:1999',
            'content' => 'required'
        ]);

        //Store submitted cover image of article to storage/images and take the image path
        $imagePath = $request->file('coverImage')->store('images', 'public');

        //Select the specific record to be updated based on ID
        $article = Articles::find($article->id);

        Storage::delete('/public/'.$article->coverImage);

        //Assign each submitted data to Articles object
        $article->title = request('title');
        $article->subtitle = request('subtitle');
        $article->tags = request('tags');
        $article->author = request('author');
        $article->coverImage = $imagePath;
        $article->content = request('content');

        //Save to database
        $article->save();

        return redirect()->action([ArticlesController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        
        //Check if post exists before deleting
        if (!isset($article)){
            return redirect()->action([ArticlesController::class, 'index'])->with('error', 'No Article Found');
        }

        // Delete Image
        Storage::delete('/public/'.$article->coverImage);
        
        //Delete record in database
        $article->delete();

        return redirect()->action([ArticlesController::class, 'index']);
    }
}
