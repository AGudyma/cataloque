<?php

namespace App\Http\Controllers;

use App\Column;
use App\Reagent;
use App\Standart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Labware;

class SearchController extends Controller
{


    /**
     * @return mixed
     */
    public function search()
    {
        $search_request = Input::get('search_request');


        switch ($table = Input::get('table')) {
            case "standarts":
                $standarts = (new Standart)->where('name', 'LIKE', '%' . $search_request . '%')->get();
                if (count($standarts) > 0)
                    return view('/search/search', ['table' => $table])->withDetails($standarts)->withQuery($search_request);
                else  return view('/search/search')->withMessage('No Details found. Try to search again !');
                break;
            case "reagents":
                $reagents = (new Reagent)->where('name', 'LIKE', '%' . $search_request . '%')->get();
                if (count($reagents) > 0)
                    return view('/search/search', ['table' => $table])->withDetails($reagents)->withQuery($search_request);
                else  return view('/search/search')->withMessage('No Details found. Try to search again !');
                break;
            case "columns":
                $columns = (new Column)->where('name', 'LIKE', '%' . $search_request . '%')->get();
                if (count($columns) > 0)
                    return view('/search/search', ['table' => $table])->withDetails($columns)->withQuery($search_request);
                else  return view('/search/search')->withMessage('No Details found. Try to search again !');
                break;
            case "labware":
                $labware = (new Labware)->where('name', 'LIKE', '%' . $search_request . '%')->get();
                if (count($labware) > 0)
                    return view('/search/search', ['table' => $table])->withDetails($labware)->withQuery($search_request);
                else  return view('/search/search')->withMessage('No Details found. Try to search again !');
                break;

            default:
                return view('/search/search')->withMessage('No Details found. Try to search again !');

        }


    }
}



