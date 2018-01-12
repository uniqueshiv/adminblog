<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index(){

    $posts=post::where('status',1)->paginate(1);
    //  return $posts;
    return view('user.blogs',compact('posts'));
    }

}
