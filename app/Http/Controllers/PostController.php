<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$posts = Post::orderBy('created_at','DESC')->get();
		return view('posts.index',compact('posts'));
	}

	public function create()
	{
		return view('posts.create');
	}

	public function store(Request $request)
	{
		$user = auth()->user();
		$data = $request->all();

		try {
			
			Post::create([
				'title'=>$data['title'],
				'body'=>$data['body'],
				'user'=>['id'=>$user->_id , 'name'=>$user->name],
			]);
			return   back()->with(['message'=>'Created Successfuly !' , 'alert-class' => 'alert-success']);
			

		} catch (Exception $e) {
			return back()->with(['message'=>$e->getMessge() , 'alert-class' => 'alert-danger']);
			
		}
	}

	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return view('posts.edit',compact('post'));
	}
	public function update(Request $request , $id)
	{
		$data = $request->all();

		try {
			
			Post::whereId($id)->update($data);
			return   back()->with(['message'=>'Updated Successfuly !' , 'alert-class' => 'alert-success' ]);

		} catch (Exception $e) {
			return back()->with(['message'=>$e->getMessge() , 'alert-class' => 'alert-danger']);
			
		}
	}
	public function show($id)
	{
		try {

			$post = Post::find($id);
			return response()->json(['message'=>'success' , 'data'=>$post] , 200);

		} catch (Exception $e) {
			return response()->json(['message'=>$e->getMessge()] , 500);
			
		}
	}

	public function delete($id)
	{
		try {

			$post = Post::find($id)->delete();
			return back()->with(['message'=>'Post Deleted Successfuly !' , 'alert-class' => 'alert-success']);

		} catch (Exception $e) {
			return back()->with(['message'=>$e->getMessge() , 'alert-class' => 'alert-danger']);
			
		}
	}
}
