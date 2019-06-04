<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index (){
        return view('form');
    }

    public function process (Request $req){
        $this->validate($req,[
            'item_1'=>'required',
            'item_2'=>'required',
            'item_3'=>'required',
            'item_4'=>'required',
            'item_5'=>'required',
            'item_6'=>'required',
            'item_7'=>'required',
            'item_8'=>'required',
            'item_9'=>'required',
            'item_10'=>'required',
            'item_11'=>'required',
            'item_12'=>'required',
            'item_13'=>'required',
            'item_14'=>'required',
            'item_15'=>'required',
            'item_16'=>'required',
            'item_17'=>'required',
            'item_18'=>'required',
            'item_19'=>'required',
            'item_20'=>'required',

        ]);

        $item_1=$req->input('item_1');
        $item_2=$req->input('item_2');
        $item_3=$req->input('item_3');
        $item_4=$req->input('item_4');
        $item_5=$req->input('item_5');
        $item_6=$req->input('item_6');
        $item_7=$req->input('item_7');
        $item_8=$req->input('item_8');
        $item_9=$req->input('item_9');
        $item_10=$req->input('item_10');
        $item_11=$req->input('item_11');
        $item_12=$req->input('item_12');
        $item_13=$req->input('item_13');
        $item_14=$req->input('item_14');
        $item_15=$req->input('item_15');
        $item_16=$req->input('item_16');
        $item_17=$req->input('item_17');
        $item_18=$req->input('item_18');
        $item_19=$req->input('item_19');
        $item_20=$req->input('item_20');

        $total = ($item_1+$item_2+$item_3+$item_4+$item_5+$item_6+$item_7+$item_8+$item_9+$item_10+$item_11+$item_12+$item_13+$item_14+$item_15+$item_16+$item_17+$item_18+$item_19+$item_20);
        return view('result')->with('total',$total);
    }

    public function resources (){
        return view('resources');
    }
}
