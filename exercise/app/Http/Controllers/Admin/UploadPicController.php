<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadPicController extends Controller
{
    public function uploader(Request $request) {
//        $upload = $request->file;
//        if ($upload->isValid()) {
//            $path = $upload->store(date('ym'), 'attachment');
//
//            return ['valid' => 1, 'message' => asset('attachment/'.$path)];
//        }
//
//        return ['valid' => 0, 'message' => 'Uploaded file has to be less than 2 MB'];

        $validator = Validator::make($request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        $extension = $request->file('file')->getClientOriginalExtension(); // getting image extension
        $dir = 'uploads/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($dir, $filename);
        return $filename;
    }

    public function fileLists() {
        return ['data'=>[], 'page'=>''];
    }
}
