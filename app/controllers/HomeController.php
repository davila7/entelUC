<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function Index(){
		$categories = Categories::with('subcategories')->get();
		return View::make('home.home')->with('categories',$categories)
									->with('error_login', false);
	}
	
	public function GetOptions($id){
		$options = Options::where('id_subcategories',$id)->get();
		$data = array();
		foreach($options as $opt){
			$data[] = array(
				'id'=>$opt->id,
				'name'=>$opt->name,
				'icon'=>$opt->icon,
				'image'=>$opt->image
			);
		}
		return Response::json($data);
	}
	
	public function GetImage($id){
		$option = Options::find($id);
		return Response::json($option->image);
	}
}
