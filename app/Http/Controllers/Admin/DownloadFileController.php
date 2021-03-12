<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class DownloadFileController extends Controller
{
    public function download($file_path) {

        $file_path = storage_path()."/app/public/contact/".$file_path;

        //$file = substr($file_path, -8, 0); // returns "de"
       // if (Storage::disk('public')->exists($contact)) {
         //   $contents = Storage::get($contact);
      //  }

        return response()->download($file_path);
    }

}
