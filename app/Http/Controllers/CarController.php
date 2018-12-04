<?php

namespace App\Http\Controllers;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Requests\StockAddRequest;

class CarController extends Controller
{
    public static function view_Inventory(){

    	DB::statement(DB::raw('set @rownum=0'));
    	$data = DB::table('codemax_manufacturer')->join('codemax_model','codemax_model.mfg_id','codemax_manufacturer.mfg_id')
    												->select(['*', 
    
														DB::raw("(SELECT (sum(units_added)) FROM codemax_cars_added where model_id=codemax_model.model_id GROUP BY model_id ) as total_added"),
														DB::raw("(SELECT IFNULL((
																	SELECT (SUM(units_sold))
																	FROM codemax_cars_sold
																	WHERE model_id=codemax_model.model_id
																	GROUP BY model_id), 0)) as total_sold "),
    													DB::raw('@rownum  := @rownum  + 1 AS rownum')
    													])
    												->havingRaw('(total_added-total_sold) >=1')
    												->get();

    							



		return Datatables::of($data)
				->addColumn('sr_no', function ($data) {
		            return $data->rownum;
		        })
		        ->addColumn('mfg', function ($data) {
		            return $data->manufacturer_name;
		        })
		        ->addColumn('model', function ($data) {
		            return $data->model_name;
		        })
		        ->addColumn('count', function ($data) {
		            return (int)$data->total_added-(int)$data->total_sold;
		        })
		        ->addColumn('sold', function ($data) {
		            return '<button type="button" class="btn btn-outline-primary btn-sm">Sold</button>';
		        })
		        ->rawColumns(['sold'])
		        ->make(true);

    
    }


    public function sold_Model(Request $request){

    	$model = $request->model;
    	$user_id = 1;

    	$data = [
    			'model_id'=>$model,
    			'sold_by_user_id'=>$user_id
    			];

    	$data = DB::table('codemax_cars_sold')->insertGetId($data);




		$sdata = DB::table('codemax_manufacturer')->join('codemax_model','codemax_model.mfg_id','codemax_manufacturer.mfg_id')
													->where('model_id','=',$model)
    												->get(['*', 
    
														DB::raw("(SELECT (sum(units_added)) FROM codemax_cars_added where model_id=codemax_model.model_id GROUP BY model_id) as total_added"),
														DB::raw("(SELECT (sum(units_sold)) FROM codemax_cars_sold where model_id=codemax_model.model_id GROUP BY model_id) as total_sold"),
    													DB::raw('@rownum  := @rownum  + 1 AS rownum')
    													]);

   		return json_encode($sdata[0]);


    }



    public function get_Cars(){
    	$data = DB::table('codemax_manufacturer')->join('codemax_model','codemax_model.mfg_id','codemax_manufacturer.mfg_id')
		    	->select('model_id as id')
		    	->selectRaw('concat(codemax_manufacturer.manufacturer_name,\' \',codemax_model.model_name) as text')
		    	->get();
    	return $data;
    }


    public function add_Qty(StockAddRequest $request){



    	$model_id = $request->model;
    	$units_added = $request->qty;
    	$user_id = 1;

    	$data = [
    			'model_id'=>$model_id,
    			'units_added'=>$units_added,
    			'added_by_user_id'=>$user_id
    			];

    	$data = DB::table('codemax_cars_added')->insertGetId($data);
    	return array('status'=>1);

    }



}
