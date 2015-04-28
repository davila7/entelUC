<?php

class UserController extends BaseController {

	public function IndexAdmin()
	{
        return View::make('home.admin');
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
        $grid->add('email','Email', true);
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
        $edit->add('username','Nombre de Usuario', 'text')->rule('required');
        $edit->add('email','Email', 'text')->rule('required');
        $edit->add('password','Password', 'password')->rule('required');
        $edit->add('active','Activo','checkbox');

        return View::make('user.crud', compact('edit'));
    }

}
