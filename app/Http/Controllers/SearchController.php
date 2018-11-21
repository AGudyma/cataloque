<?php

namespace App\Http\Controllers;

use App\Standart;
use Illuminate\Http\Request;

class SearchController extends Controller
{
//    public function findByName($name)
//    {
//        $standart = Standart::find($name);
//        return view('standarts/show', ['standart' => $standart,
//        ]);
//   }

    public function findByAll(Request $request)
    {

        $standart = Standart::find($request);

        return view('standarts/search', ['standart' => $standart,
        ]);
   }

    public function search()
    {
        return view('tables/standarts/search');
   }
}
