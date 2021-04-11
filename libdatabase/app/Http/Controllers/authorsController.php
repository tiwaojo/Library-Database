<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\author;
use Illuminate\Support\Facades\Schema;

class authorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors=author::all();
        return view('author.author')->with('authors',$authors);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('editForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'A_FName'=>'required',
            'A_LName'=>'required',
            'A_BDate'=>'required',
            'A_Country'=>'required'
        ]);
       
            $authors=new author();
            $authors->A_FName=$request->A_FName;
            $authors->A_LName=$request->A_LName;
            $authors->A_BDate=$request->A_BDate;
            $authors->A_Country=$request->A_Country;
            // $authors->save();
            $data['Author_Id']=$authors->id;
            $query=$authors->save();
            if($query){
                return redirect('/author')->with('success','you have created author');
            }else{
                return redirect('/author')->with('fail','Something went wrong');
            }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
