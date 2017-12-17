<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use DateTime;
class NewsController extends Controller
{
    
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
        $post=\App\News::find($id);
    
        return view('single',["post"=>$post]);
    }

    public function archive()
    {
        $categories=\App\Category::all();
        $data=DB::table('news')->orderBy('created_at')->take(10)->get();
    
        return view('archive',["data"=>$data,"categories"=>$categories]);
    }

    public function addNews()
    {    
        $categories=\App\Category::all();
        return view('addnews',["categories"=>$categories]);
    }

    public function saveNews(Request $request) {
        //return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
            'category'=>'required'
        ]);
        $news=new News;
        //$news->title=$_POST['title'];
        $news->title=$request->title;
        $news->description=$request->description;
        $news->pubDate=new DateTime();
       $news->id_user=\Auth::user()->id;
       $news->link=$request->link;
       $news->id_category=$request->category;
       $news->save();
       $categories=\App\Category::all();
       $data=\App\News::all();
   
       return redirect('news/');
	}
    
}
