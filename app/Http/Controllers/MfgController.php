<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\MfgAddRequest;
use DB;

class MfgController extends Controller
{
    public function add_Manufacturer(MfgAddRequest $request){

    	$mfg = isset($request->mfg)?$request->mfg:'';
    	$user_id = 1;

    	$data = [
    			'manufacturer_name'=>$mfg,
    			'added_by_user_id'=>$user_id
    			];

    	$data = DB::table('codemax_manufacturer')->insertGetId($data);

    	return array('status'=>1);

    }


    public function get_Manufacturers(){



    	$data = DB::table('codemax_manufacturer')->select('mfg_id as id','manufacturer_name as text')->get();
    	return $data;

    }





}
