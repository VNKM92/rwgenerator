<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WordGenerator;
use Illuminate\Support\Str;

class WordGeneratorController extends Controller
{
    

    public function list(Request $request){
        // $data  = WordGenerator::get();
        $data = WordGenerator::latest()->paginate(10);
        return view('backend.admin.wordgenerator.word.index',compact('data'));    
    }

    public function show($slug)
    {
        $data = WordGenerator::where('slug', $slug)->firstOrFail();
        return view('backend.admin.wordgenerator.word.show',compact('data'));    

    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // $shipmentget = WordGenerator::where('id',$statusid)->first();
            $item = new WordGenerator;
            $item->name = $data['name'];
            $item->slug = Str::slug($data['slug']);
            $item->description  = $data['description'];
            $item->keyword  = $data['keyword'];
            $item->metatitle  = $data['metatitle'];
            $item->metadescription  = $data['metadescription'];
            $item->adsdata  = $data['adsdata'];
            $item->adsstatus  = $data['status'];
            $item->status  = $data['status'];
            $item->save();
        }

        return view('backend.admin.wordgenerator.word.form');    
    }


    public function edit(Request $request, $id){
        $data = WordGenerator::where('id',$id)->first();      
        if($request->isMethod('post')){
            $data = $request->all();
            $item = WordGenerator::where('id',$id)->first();
            $item->name = $data['name'];
            $item->slug = Str::slug($data['slug']);
            $item->description  = $data['description'];
            $item->keyword  = $data['keyword'];
            $item->metatitle  = $data['metatitle'];
            $item->metadescription  = $data['metadescription'];
            $item->adsdata  = $data['adsdata'];
            $item->adsstatus  = $data['adsstatus'];
            $item->status  = $data['status'];
            $item->save();
        }

        return view('backend.admin.wordgenerator.word.edit',compact('data','id'));    
    }


    public function delete($id){
        $data = WordGenerator::where('id',$id)->delete();    
        return redirect('/admin/generator/word')->with('success','Data successfully deleted'); 
    }
}
