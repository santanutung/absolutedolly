<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Art;
use App\Models\Category;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Art::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.arts.index', compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('deleted', 0)->orderBy('id', 'desc')->get();
        return view('admin.arts.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Art::create([
            "name" => $request->name,
            "description" => $request->description,
            "item_id" => $request->item_id??0,
            "digital" => $request->digital ?? 0,
            "physical" => $request->physical ?? 0,
            "physical_instructions" => $request->physical_instructions ?? 0,
            "digital_instructions" => $request->digital_instructions ?? 0,
            "digital_art_price"  => $request->digital_art_price ?? 0,
            "digital_art_dis" => $request->digital_art_dis ?? 0,
            "digital_art_sell" => $request->digital_art_sell ?? 0,
            "physical_art_price" => $request->physical_art_price ?? 0,
            "physical_art_dis" => $request->physical_art_dis ?? 0,
            "physical_art_sell" =>  $request->physical_art_sell ?? 0,
            "size_physical" => $request->size_physical ?? 0,
            "frame_color" => $request->frame_color ?? 0,
            "materia_used_painting" => $request->materia_used_painting ?? 0,

        ]);

        //        "name" => "Casey Castaneda"
        //   "item_id" => "Pariatur Ut laborio"
        //   "description" => "Delectus ad velit i"
        //   "digital" => "digital"
        //   "physical" => "physical"
        //   "physical_instructions" => "Quia voluptatem Vol"
        //   "digital_instructions" => "Recusandae Consecte"
        //   "digital_art_price" => "588"
        //   "digital_art_dis" => "42"
        //   "digital_art_sell" => "341.03999999999996"
        //   "physical_art_price" => "446"
        //   "physical_art_dis" => "56"
        //   "category" => "Cupidatat deserunt d"
        //   "size_digital" => "Est placeat laborum"
        //   "frame_color" => "Hic saepe quisquam i"
        //   "materia_used_painting" => "Quis natus rerum et"
        return redirect()->route('admin.arts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        return view('admin.arts.show', compact('art'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        return view('admin.arts.form', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        $request-> physical_art_delivery_time;
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $art->update([
            "name" => $request->name,
            "description" => $request->description,
            "item_id" => $request->item_id ?? 0,
            "digital" => $request->digital ?? 0,
            "physical" => $request->physical ?? 0,
            "physical_instructions" => $request->physical_instructions ?? 0,
            "digital_instructions" => $request->digital_instructions ?? 0,
            "digital_art_price"  => $request->digital_art_price ?? 0,
            "digital_art_dis" => $request->digital_art_dis ?? 0,
            "digital_art_sell" => $request->digital_art_sell ?? 0,
            "physical_art_price" => $request->physical_art_price ?? 0,
            "physical_art_dis" => $request->physical_art_dis ?? 0,
            "physical_art_sell" =>  $request->physical_art_sell ?? 0,
            "size_physical" => $request->size_physical ?? 0,
            "frame_color" => $request->frame_color ?? 0,
            "materia_used_painting" => $request->materia_used_painting ?? 0,
            "physical_art_delivery_time"=> $request->physical_art_delivery_time??0

        ]);


        return redirect()->route('admin.arts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        $art->update([
            'deleted' => 1
        ]);
        return redirect()->route('admin.arts.index');
    }
}
