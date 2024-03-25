<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function handleImage(Request $request)
    {
        // Validate upload file (size, type);
        $request->validate([
            'image' => ['required', 'max:500', 'mimes:png,jpg,gif'], //500kb

        ]);

        $request->image->store('/images');
        // $request->image->storeAs('/images','new-image.jpg');
        // return redirect()->route('success','');
        return redirect()->back();
    }
    public function download()
    {
        return response()->download(public_path('storage/images/new-image.jpg'));
    }
}
