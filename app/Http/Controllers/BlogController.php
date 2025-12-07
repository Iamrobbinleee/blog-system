<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class BlogController extends Controller
{
    public function getAllBlogs(){
        $blogs = Blog::whereNull('deleted_at');

        return response()->json($blogs);
    }

    public function createNewBlog(Request $request){
        //
    }
}
