<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use Response;
use Session;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $booklist = BookModel::paginate(15);

        if ($request->ajax()) {
            return view('/book', compact('booklist'));
        }

        return view('/book',compact('booklist'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booklist= new BookModel([
            'name' => $request->post('txtName'),
            'descriptions'=> $request->post('txtDescriptions'),
        ]);
        $booklist->save();
        return Response::json($booklist);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/show', ['read' => BookModel::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $booklist  = BookModel::where($where)->first();

        return Response::json($booklist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $booklist = BookModel::find($request->post('hdnBookId'));
        $booklist->name = $request->post('txtName');
        $booklist->descriptions = $request->post('txtDescriptions');
        $booklist->update();
        return Response::json($booklist);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $booklist = BookModel::where('id',$id)->delete();
        return Response::json($booklist);
    }


}
