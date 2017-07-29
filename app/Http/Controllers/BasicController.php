<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['result'] = \App\Basic::all();
        return view('basic/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basic/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $status = \App\Basic::create($input);

        if($status) return redirect('/')->with('success', 'Data included!');
        else return redirect('basic/add')->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result'] = \App\Basic::where('id_siswa', $id)->first();
        return view('basic/form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $result = \App\Basic::where('id_siswa', $id)->first();
        $status = $result->update($input);

        if($status) return redirect('/')->with('success', 'Data updated!');
        else return redirect('basic/add')->with('error', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = \App\Basic::findOrFail($id)->delete();
        if($task){
            return redirect('/')->with('success', 'Data Deleted!');
        }
        else{
            return redirect('/')->with('error', 'Failed!');
        }   
    }
}
