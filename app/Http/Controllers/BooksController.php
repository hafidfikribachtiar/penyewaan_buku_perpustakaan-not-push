<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Category;
use App\Models\Books;

class BooksController extends Controller
{
    public function getIndex(){
    
        $books = DB::table('books')->get();
        $data = [];
        $data['books'] = $books;

        return view("books.index", $data);
    }
        
    //form tambah
    public function postSave (Request $request){
        DB::table('books')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);
        return redirect('/admin/books');
    }

    //simpan form
    public function getEdit($id)
    {
        return view ('books.edit');
    }

    //form edit
    public function delete ($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect('/books');
    }

    //hapus data
    public function detail ($id)
    {
        //
    }

    //detail data
    public function getAdd ()
    {
        return view ('books.add');
    }
}
