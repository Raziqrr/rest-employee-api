<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;


class TagController extends Controller
{
    //
    function create(Request $request){
        Tag::create($request->all());
        return response()->json(["status"=>"ok", "message"=>"Successfully created"]);
    }

    function index(){
        $tags= Tag::all();
        return response()->json(["status"=>"ok", "data"=>$tags]);
    }

    function show($id){
        $tags = Tag::find($id);
        return response()->json(["status"=>"ok", "data"=>$tags]);
    }
}
