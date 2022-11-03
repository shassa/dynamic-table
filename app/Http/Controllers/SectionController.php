<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Http\Requests\SectionUpdateRequest;
use App\Models\Section_1;
use App\Models\Section_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section1=Section_1::orderBy('position', 'asc')->paginate(15);
        $section2=Section_2::orderBy('position', 'asc')->paginate(15);
       return view('welcome',compact('section1','section2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionRequest $request)
    {
        $arr = $request->validated();
        $arr['position']=count(Section_1::all())+1;
        $setion1= Section_1::create($arr);
        return Response($setion1);
    }

    public function store2(SectionRequest $request)
    {
        $arr = $request->validated();
        $arr['position']=count(Section_2::all())+1;
        $setion2=Section_2::create($arr);
        return Response($setion2);
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
    public function update(SectionUpdateRequest $request)
    {
        if($request->data["table"]=="Section_1"){
            Section_1::find($request->data["id"])->update(
                $request->validated()["data"]
            );}else{
                Section_2::find($request->data["id"])->update(
                    $request->validated()["data"]
                );
            }
        return Response($request->validated()["data"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->table=="Section_1"){
           Section_1::find($request->id)->delete();
        }else{
            Section_2::find($request->id)->delete();
        }
        return Response($request);
    }

    public function updateOrder(Request $request)
    {
        $ids_strings = implode(',', $request->data);

        DB::statement(DB::raw('set @rownum=0'));
        Section_1::whereIn('id',$request->data)->
        orderByRaw("FIELD(id, {$ids_strings})")->
        update(["position" =>DB::raw('@rownum  := @rownum  + 1')]);
        $data=Section_1::orderBy('position', 'asc')->paginate(15);
       return response($data);
    }

    public function updateOrder2(Request $request)
    { 
        $ids_strings = implode(',', $request->data);

        DB::statement(DB::raw('set @rownum=0'));
        Section_2::whereIn('id',$request->data)->
        orderByRaw("FIELD(id, {$ids_strings})")->
        update(["position" =>DB::raw('@rownum  := @rownum  + 1')]);
        $data=Section_2::orderBy('position', 'asc')->paginate(15);
       return response($data);
    }
}
