<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;

class BookmarksController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $bookmarks = Bookmark::orderBy('created_at', 'desc')->get();
    return view('bookmark.index')->with('bookmarks', $bookmarks);
  }

  public function store(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'url' => 'required'
    ]);

    // Create Bookmark
    $bookmark = new Bookmark;
    $bookmark->name = $request->input('name');
    $bookmark->url = $request->input('url');
    $bookmark->description = $request->input('description');


    $bookmark->save();

    return redirect('/bookmarks')->with('success', 'Bookmark Added');
  }

  public function destroy($id){
    $bookmark = Bookmark::find($id);
    $bookmark->delete();

    return;
  }
}
