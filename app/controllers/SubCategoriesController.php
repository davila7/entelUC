<?php

class SubCategoriesController extends BaseController {

	public function GridSubCategories()
	{
		$filter = DataFilter::source(SubCategories::with('categories'));
        $filter->attributes(array('class'=>'form-inline'));
        $filter->add('name','Buscar por Nombre', 'text');
        $filter->submit('search');
        $filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('name','Nombre', true);
        $grid->add('categories.name','Categoría');
        $grid->edit(url().'/subcategories/edit', 'Editar/Borrar','modify|delete');
        $grid->link('/subcategories/create', 'Crear Nueva', 'TR');
        $grid->link("options/list","Lista Opciones", "TR");
        $grid->link("categories/list","Lista Categorías", "TR");
        $grid->orderBy('name','desc'); 
        $grid->paginate(10); 

        return View::make('subcategories.list', compact('filter', 'grid'));
	}

	public function CrudSubCategories(){
        $edit = DataEdit::source(new SubCategories());
        $edit->label('Categorias');
        $edit->link("subcategories/list","Lista Sub-Categorías", "TR")->back();
        $edit->add('name','Nombre', 'text')->rule('required');
        $edit->add('description','Descripción', 'textarea')->rule('required');
        $edit->add('id_categories','Categoría','select')->options(Categories::lists('name', 'id'));

        return View::make('subcategories.crud', compact('edit'));
    }

}
