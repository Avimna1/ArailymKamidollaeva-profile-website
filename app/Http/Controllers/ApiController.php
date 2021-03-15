<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    /*
        This function return the all post rows
    */

    public function index(Request $request){
$posts = Post::all();
    return json_encode($posts, 200);
    }

    /*
    return post with post_id
    */

    public function get_post(Request $request){
        $post = Post::find($request->post_id);

        if($post == null){
            return json_encode(['message' => 'There is no post'], 404);
        }
        return json_encode($post, 200);
    }
}
