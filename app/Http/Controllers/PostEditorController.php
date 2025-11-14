<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Prefecture;
use App\Models\Role;
use App\Models\Status;
use App\Models\Temple;
use App\Models\Topic;
use App\Models\User;
use App\Models\Post;


class PostEditorController extends Controller
{
    public function index()
    {
        return response()->json([
            'prefectures' => Prefecture::orderBy('id')->get(['id','name']),
            'locations'   => Location::orderBy('id')->get(['id','name']),
            'statuses'    => Status::orderBy('id')->get(['id','name']),
            'topics'      => Topic::orderBy('id')->get(['id','name']),
            'roles'       => Role::orderBy('id')->get(['id','name']),
        ]);
    }
}
