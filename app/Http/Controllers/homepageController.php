<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
    public function homepage(){
        $books = DB::table('books')->get();
        return view('homepage',['books' => $books]);
    }

    public function publishers(){
        $publishers1 = DB::table('publishers')->get();
        return view ('publisher',['publishers'=>$publishers1]);
    }
    public function category($id){
        $category = DB::table('categories')->where('id',$id)->get();
        $bookCategories = DB::table('books_categories')->where('category_id',$id)->get();
        $books = DB::table('books')->where('id',$bookCategories[0]->book_id)->get();
        return view('categorypage',['books' => $books],['categories'=>$category]);
    }

    public function bookdetail($id){
        $books = DB::table('books')-> where('id',$id)->get();
        $publishers = DB::table('publishers')->where('id',$books[0]->publisher_id)->get();
        return view('bookdetail',['books' => $books],['publishers'=> $publishers]);
    }

}
