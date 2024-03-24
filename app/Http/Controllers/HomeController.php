<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $blogs = [
        //     [
        //         'title' => 'title one',
        //         'body' => 'this is body text',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'title two',
        //         'body' => 'this is body text',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'title three',
        //         'body' => 'this is body text',
        //         'status' => 0
        //     ]
        // ];
        return view('home');
    }

    public function __invoke(){
        Storage::delete('/images/new-img.jpg');

        // File::delete((storage_path('app/public/images/new-image.jpg')));
        // unlink(storage_path('app/public/images/new-image.jpg'));
    }
}
