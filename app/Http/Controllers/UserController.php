<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

        public function profile()
        {
            $user = Auth::user();
            $user_id = Auth::id();
            $posts = Post::query();
            $posts->where('user_id', $user_id);
            $posts = $posts->with('prefecture', 'temple', 'status', 'topic')->get();

            return view('profile', compact('user','posts'));
        }

        public function distance(Request $request)
        {
            $validated = $request->validate([
                'distance' => ['decimal:0,999.99', 'numeric'],
            ]);

            $newDist = $validated['distance'];

            $user_id = Auth::id();
            $currentDist = DB::table('users')->where('id', $user_id)->value('distance');
            
            if($currentDist != null)
            {
                DB::table('users')->where('id', $user_id)->update(['distance'=>  $currentDist + $newDist]);
            }
            else
            {
                DB::table('users')->where('id', $user_id)->insert(['distance' => $newDist]);
            }

            $user = Auth::user();
            $user_id = Auth::id();
            $posts = Post::query();
            $posts->where('user_id', $user_id);
            $posts = $posts->with('prefecture', 'temple', 'status', 'topic')->get();
            $user->refresh();

            return view('profile', compact('user','posts'));

        }

}
