<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prefecture;
use App\Models\Role;
use App\Models\Status;
use App\Models\Temple;
use App\Models\Topic;
use App\Models\User;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    
    public function show()
    {
        return view('blogListing.home');
    }

    public function select()
    {
        $prefectures = Prefecture::all();
        $temples = Temple::all();
        $status = Status::all();
        $topics = Topic::all();
        $roles = Role::all();
        return view('blogListing.home', compact('prefectures', 'temples', 'status', 'topics', 'roles'));
    }

    public function filter(Request $request)
    {
        $prefecture = $request->input('prefecture_id');
        $temple = $request->input('temple_id');
        $status = $request->input('status_id');
        $topic = $request->input('topic_id');
        $role = $request->input('role_id');

        $posts = Post::query();
        if($prefecture != '')
        {
            $posts->where('prefecture_id', $prefecture);
        }
        if($temple != '')
        {
            $posts->where('temple_id', $temple);
        }
        if($status != '')
        {
            $posts->where('status_id', $status);
        }
        if($topic != '')
        {
            $posts->where('topic_id', $topic);
        }
        if($role != '')
        {
            $users = User::where('role_id', $role)->pluck('id'); 
            $posts->whereIn('user_id', $users);
        }

        $posts = $posts->with('prefecture', 'temple', 'status', 'topic', 'user.role')->get(); //returns a collection


        if($posts->isEmpty())
        {
            return redirect()->route('home')->with('message', 'No matches found. Try Again (>_<)');
        }

        $prefectures = Prefecture::all();
        $temples = Temple::all();
        $status = Status::all();
        $topics = Topic::all();
        $roles = Role::all();

        return view('blogListing.filter', compact('posts', 'prefectures', 'temples', 'status', 'topics', 'roles'));

    }

    public function create()
    {
        $prefectures = Prefecture::all();
        $temples = Temple::all();
        $status = Status::all();
        $topics = Topic::all();
        $roles = Role::all();

        return view('blogEditor', compact('prefectures', 'temples', 'status', 'topics', 'roles'));
    }

    public function store(PostRequest $postRequest)
    {
        //dd($postRequest->all());
        $validated = $postRequest->validated();

        $photoPath = null;
        if ($postRequest->hasFile('image')) {
            $photoPath = $postRequest->file('image')->store('posts', 'public');
        }

        Post::create([
            'prefecture_id' => $validated['prefecture_id'],
            'temple_id'     => $validated['temple_id'],
            'status_id'     => $validated['status_id'],
            'topic_id'      => $validated['topic_id'],
            'user_id'       => auth()->id(),
            //'photo_path'    => $photoPath,
            'body'          => $validated['body'],
            'title'         => $validated['title'],
        ]);

        return redirect()->route('home')->with('message', 'Blog post created successfully!');
    }
    
}
