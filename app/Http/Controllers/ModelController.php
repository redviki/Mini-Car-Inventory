<?php

namespace App\Http\Controllers;
use App\Http\Requests\ModelAddRequest;
use DB;

class ModelController extends Controller
{
    public function add_Model(ModelAddRequest $request){

    	$mfg_id = $request->mfg;
    	$model = $request->model;
    	$user_id = 1;

    	$data = [
    			'mfg_id'=>$mfg_id,
    			'model_name'=>$model,
    			'added_by_user_id'=>$user_id
    			];

    	$data = DB::table('codemax_model')->insertGetId($data);
    	return array('status'=>1);

    }

    public static function list_Model(){

    	$data = DB::table('codemax_model')->select('mfg_id as id','model_nameel as text')->get();
    	return $data;

    }


}
