<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts=DB::select('select * from posts where id=:id',['id'=>5]);
        // $posts=DB::insert('insert into posts(title,excerpt,body,image_path,is_published,min_to_read) VALUES (?,?,?,?,?,?)',[
        //     'test','test','test','test',1,2 ]);
        // $posts=DB::update('update posts set body=? where id=?',["very interesting",101]);
        // $posts=DB::delete('delete from posts where id=?',[101]);

        // CHAIN METHOD

        return view('blog.index',[
            'posts'=>Post::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert using php oop way

        // $posts=new Post();
        // $posts->title=$request->title;
        // $posts->body=$request->body;
        // $posts->min_to_read=$request->min_to_read;
        // $posts->excerpt=$request->excerpt;
        // $posts->image_path="temporary";
        // $posts->is_published=$request->is_published==="on";
        // $posts->save();

        // insert using eloquent way

        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'min_to_read'=>$request->min_to_read,
            'excerpt'=>$request->excerpt,
            'is_published'=>$request->is_published==="on",
            'image_path'=>'temporary',
        ]);
        
        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return view('blog.show',[
            'post'=>Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
