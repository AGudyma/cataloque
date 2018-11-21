<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('certificate.index')->with('certificates',$certificates);
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'select file' => '
            required|image|mimes:jpeg,pnp,jpg,gif|max:2048'
        ]);

        $image = $request->file('select_file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("image"), $new_name);
        return back()->with('success', 'Image Uploaded Successfully'
        )->with('path',$new_name);
    }

    public function show()
    {

    }

    public function delete($id)
    {
        $image = Certificate::find($id);
        $image->delete();

    }


}
