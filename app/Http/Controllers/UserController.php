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

        public function myProfile()
        {
            $user = Auth::user();
            $user_id = Auth::id();
            $posts = Post::query();
            $posts->where('user_id', $user_id);
            $posts = $posts->with('prefecture', 'temple', 'status', 'topic')->get();

            return view('myProfile', compact('user','posts'));
        }

        public function profile(User $user)
        {
            $user_id = $user->id;
            $posts = Post::query();
            $posts->where('user_id', $user_id);
            $posts = $posts->with('prefecture', 'temple', 'status', 'topic')->get();
            
            return view('profile', compact('user', 'posts'));
        }

        public function distance(Request $request)
        {
            $validated = $request->validate([
                'distance' => ['required','decimal:0,999.99', 'numeric'],
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

            return view('myProfile', compact('user','posts'));

        }

        public function showEdit()
        {
            $user = Auth::user();
            return view('editProfile', compact('user'));
        }

        public function edit(Request $request)
        {
            $user = Auth::user();

            $input = [
                'name' => ['max:25'],
                'bio' => ['nullable', 'max:150'],
                'location' => ['nullable', 'max:50'],
            ];

            if ($user->role->name == 'Pilgrims')
            {
                $input['startDate'] = ['nullable', 'date'];
                $input['completedDate'] = ['nullable', 'date'];
                $input['distance'] = ['nullable','between:0,9999.99', 'numeric'];
            }

            $validated = $request->validate($input);

            $posts = Post::query();
            $posts->where('user_id', $user->id);
            $posts = $posts->with('prefecture', 'temple', 'status', 'topic')->get();

            $user->fill($validated);
            $status = $user->save();
            if($status)
            {
                $user->refresh();
                return view('myProfile', compact('user', 'posts'));
            }
            else
            {
                back();
            }
        }

}
