<?php

class CategoriesController extends BaseController {

	public function GridCategories()
	{
		$filter = DataFilter::source(new Categories);
        $filter->attributes(array('class'=>'form-inline'));
        $filter->add('name','Buscar por Nombre', 'text');
        $filter->submit('search');
        $filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('name','Nombre', true);
        $grid->edit(url().'/categories/edit', 'Editar/Borrar','modify|delete');
        $grid->link('/categories/create', 'Crear Nueva', 'TR');
        $grid->link("subcategories/list","Lista Sub-Categorías", "TR");
        $grid->orderBy('name','desc'); 
        $grid->paginate(10); 

        return View::make('categories.list', compact('filter', 'grid'));
	}

	public function CrudCategories(){
        $edit = DataEdit::source(new Categories());
        $edit->label('Categorias');
        $edit->link("categories/list","Lista Categorías", "TR")->back();
        $edit->add('name','Nombre', 'text')->rule('required');
        $edit->add('description','Descripción', 'textarea')->rule('required');
        $edit->add('icon','Icono', 'image')->move('img/icons/')->fit(240, 160)->preview(120,80);

        return View::make('categories.crud', compact('edit'));
    }

}
