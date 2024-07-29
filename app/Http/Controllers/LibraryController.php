<?php

namespace App\Http\Controllers;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $data['library'] = Library::all();
        return view('Library.index', $data);
}
public function create()
    {
        $library = new Library();
        return view('library.create');
        $library = new Library
        $library->title  = $request['Title'];
        $library->author  = $request['Author'];
        $library->description  = $request['Description'];
        $library->isbn  = $request['Isbn'];
        $library->year  = $request['Published Year'];
        $library->save();
    }
    public function store(Request $request)
    {
        $library = new Library();
        $student->title    =$request['Title'];
        $student->author   =$request['Author'];
        $student->description   =$request['Description'];
        $student->isbn   =$request['Isbn'];
        $student->year   =$request['Published Year'];
        $student->save();
    return redirect()->to('library');
    }
    public function(string $id)
{
    $data['library'] = Library::all();
    return view('library.edit', $data);
}
public function update(Request $request, string $id)
{
    $library = Library::find($id);
    $library->title =$request['Title'];
    $library->author =$request['Author'];
    $library->description =$request['Email'];
    $library->isbn =$request['Isbn'];
    $library->year =$request['Published Year'];
    $library->save();
    return redirect()->back();
}

public function destroy(string $id)
{
    $library = Library::find($id)
    $library->delete();
    return redirest()->to('library');
}


}
