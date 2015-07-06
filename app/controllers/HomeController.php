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
		$preselection = null;

		$step_one = '';
		$step_two = '';
		$existe = false;
		if(Auth::check()){
			$pre1 = PreSelection::where('id_user', Auth::user()->id)->first();
			if(isset($pre1))
			$step_one = $pre1->step_one;

			$pre2 = PreSelection::where('id_user', Auth::user()->id)->first();
			if(isset($pre2))
			$step_two = $pre2->step_two;

			$order = Orders::where('id_user',  Auth::user()->id)->first();
			if(isset($order)){
				$existe = true;
			}
		}


		return View::make('home.home')->with('categories',$categories)
									->with('error_login', false)
									->with('step_one', $step_one)
									->with('step_two', $step_two)
									->with('existeOrder', $existe);
	}

	public function GetOptions($id){
		$options = Options::where('id_subcategories',$id)->get();
		$data = array();
		foreach($options as $opt){
			$data[] = array(
				'id'=>$opt->id,
				'name'=>$opt->name,
				'icon'=>$opt->icon,
				'image'=>$opt->image,
				'color'=>$opt->color
			);
		}
		return Response::json($data);
	}

	public function GetImage($id){
		$option = Options::find($id);
		return Response::json($option->image);
	}

	public function GetStepOne($val, $id_user){
		$pre = PreSelection::where('id_user',$id_user)->first();

		if(isset($pre)){
			$pre->step_one = $val;
			$pre->save();
		}else{
			$pre = new PreSelection;
			$pre->step_one = $val;
			$pre->id_user = $id_user;
			$pre->save();
		}

		return Response::json('ok');
	}

	public function GetStepTwo($val, $id_user){
		$pre = PreSelection::where('id_user',$id_user)->first();
		if(isset($pre)){
			$pre->step_two = $val;
			$pre->save();
		}else{
			$pre = new PreSelection;
			$pre->step_tow = $val;
			$pre->id_user = $id_user;
			$pre->save();
		}

		Session::put('id_preselection', $pre->id);
		return Response::json('ok');
	}
}
