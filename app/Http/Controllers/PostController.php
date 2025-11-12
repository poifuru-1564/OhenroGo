<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prefecture;
use App\Models\Role;
use App\Models\Status;
use App\Models\Temple;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show(Post $post)
    {
        $post = Post::all();
        return view('blogListing', compact('post'));
    }

    public function select()
    {
        $prefectures = Prefecture::all();
        $temples = Temple::all();
        $status = DB::table('status')->get();
        $topics = Topic::all();
        $roles = Role::all();
        return view('blogListing', compact( 'prefectures', 'temples', 'status', 'topics', 'roles'));
    }

    public function filter(Request $request)
    {
        $prefecture = $request->input('prefecture_id');
        $temple = $request->input('temple_id');
        $status = $request->input('status_id');
        $topic = $request->input('topic_id');
        $role = $request->input('role_id');

        $posts = Post::all();
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
            $users = DB::table('users')->where('role_id', $role);
            $posts->where('user_id', $users);
        }

        return view('blogListing.filter', compact('posts'));

    }

    // public function filterTemples(Request $request)
    // {
    //     $prefectures = Prefecture::all();
    //     $temples = Temple::where('prefecture_id', $request)->get();
    //     return view('blogListing.filteredTemples', compact('prefectures', 'temples'));
    // 
    
}
