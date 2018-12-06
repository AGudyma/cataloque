<?php

namespace App\Http\Controllers;

use App\Reagent;
use Illuminate\Http\Request;

class ReagentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reagents = Reagent::paginate(2);
        return view('tables/reagents/index', ['reagents' => $reagents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables/reagents/create');
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
//                'batch'=>'required|alpha_dash|max:255',
//                'expire_date'=>'date_format:format',
//                'package'=>'required|alpha_dash|max:255',
//                'quantity'=>'required|alpha_dash|max:255',

            ));
        $reagent=new Reagent();
        $reagent->name       = $request->name;
        $reagent->batch       = $request->batch;
        $reagent->producer = $request->producer;
        $reagent->package = $request->package;
        $reagent->quantity = $request->quantity;
        $reagent->expire_date = $request->expire_date;

        $reagent->quality_docs = $request->quality_docs;
        $reagent->save();
//        Session::flash('message', 'Successfully created item!');
//          Session::flash('message', 'Successfully created nerd!');
        return view('tables/reagents/show', ['reagent'=>$reagent]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reagent  $reagent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reagent = Reagent::find($id);
        return view('tables/reagents/show', ['reagent' => $reagent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reagent = Reagent::find($id);
        return view('tables/reagents/edit', ['reagent'=>$reagent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reagent  $reagent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if (!empty($id)) {
            $reagent = Reagent::find($id);
            $reagent->name = $request->input('name');
            $reagent->batch = $request->batch;
            $reagent->producer = $request->producer;
            $reagent->package = $request->package;
            $reagent->quantity = $request->quantity;
            $reagent->expire_date = $request->expire_date;
        }
        $reagent->save();
        return view('tables/reagents/show', ['reagent' => $reagent,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reagent  $reagent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reagent $reagent)
    {
        //
    }
}
