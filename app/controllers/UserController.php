<?php

class UserController extends BaseController {

	public function IndexAdmin()
	{
        if(Auth::check()){
            if(Auth::user()->esAdmin){
            return View::make('home.admin');    
            }else{
                return Redirect::to('/');
            }
        }else{
                return Redirect::to('/');
        }
	}
    
    public function Login(){
		$userdata = array(
			'email' => Input::get('email'),
			'password'=> Input::get('password')
		);
        //echo Input::get('password');
        $categories = Categories::with('subcategories')->get();
		if(Auth::attempt($userdata, true)){
		    return View::make('home.home')->with('categories',$categories)
									->with('error_login', false);
		}else{
			return View::make('home.home')->with('categories',$categories)
									->with('error_login', true);
		}
	}
    
    public function Logout(){
		Auth::logout();
        $categories = Categories::with('subcategories')->get();
        return View::make('home.home')->with('categories',$categories)
									->with('error_login', false);
	}
    
	public function GridUser()
	{
		$filter = DataFilter::source(new User);
        $filter->attributes(array('class'=>'form-inline'));
        $filter->add('username','Buscar por Usuario', 'text');
        $filter->add('email','Buscar por Email', 'text');
        $filter->submit('search');
        $filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('username','Nombre de Usuario', true);
        $grid->add('documento','Rut', true);
        $grid->add('email','Email', true);
        $grid->add('esAdmin','Admin');
        $grid->add('active','Activo', true);
        $grid->edit(url().'/user/edit', 'Editar/Borrar','modify|delete');
        $grid->link('/user/create', 'Crear Nuevo', 'TR');
        $grid->orderBy('username','desc'); 
        $grid->paginate(10); 

        return View::make('user.list', compact('filter', 'grid'));
	}

	public function CrudUser(){
        $edit = DataEdit::source(new User());
        $edit->label('Usuarios');
        $edit->link("user/list","Lista Usuarios", "TR")->back();
        $edit->add('username','Nombre', 'text')->rule('required');
        $edit->add('email','Email', 'text')->rule('required');
        $edit->add('documento','RUT', 'text')->rule('required');
        $edit->add('active','Activo', 'checkbox')->rule('required');
        $edit->add('password','Password', 'password');
        $edit->add('active','Activo','checkbox');
        
        return View::make('user.crud', compact('edit'));
    }

}
