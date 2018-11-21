<?php

namespace App\Http\Controllers;

use App\Standart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class StandartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eloquent
        $standarts = Standart::all();
//          Session::flash('message', 'List updated');

  //      return view('tables/standarts/index', ['standarts' => $standarts]);

        return view('tables/standarts/index', ['standarts' => $standarts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('tables/standarts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            array('name'=> 'required|max:255',
                'batch'=>'required|alpha_dash|max:255',
//                'expire_date'=>'date_format:format'
//                'package'=>'required|alpha_dash|max:255',
//                'quantity'=>'required|alpha_dash|max:255',

            ));
        $standart=new Standart;
        $standart->name       = $request->name;
        $standart->producer = $request->producer;
        $standart->package = $request->package;
        $standart->quantity = $request->quantity;
        $standart->expire_date = $request->expire_date;

           $standart->quality_docs = $request->quality_docs;
        $standart->save();
//        Session::flash('message', 'Successfully created item!');
//          Session::flash('message', 'Successfully created nerd!');
        return view('tables/standarts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //as normal
        // $standart = DB::table('standarts')->where('id', $id)->first();
        $standart = Standart::find($id);//Eloquent
        return view('tables/standarts/show', ['standart' => $standart]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $standart = Standart::find($id);
        return view('tables/standarts/edit',['standart' => $standart]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        $this->validate($request,
//            array('name'=> 'required|max:255',
//                'batch'=>'required'
//            ));


        if (!empty($id)) {
            $standart = Standart::find($id);


        $standart->name = $request->input('name');
            $standart->producer = $request->producer;
            $standart->package = $request->package;
            $standart->quantity = $request->quantity;
            $standart->expire_date = $request->expire_date;

        if ($standart->quality_docs == NULL)
        $standart->quality_docs = $request->input('quality_docs');
        }


        $standart->save();
        return view('tables/standarts/show', ['standart' => $standart]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     * @throws \Exception
     */
    public function destroy($id)
    {
        $standart = Standart::find($id);

        $standart->delete();
        return redirect()->route('standarts.index');
    }

    public function saveFileName()
    {
        
    }
}
