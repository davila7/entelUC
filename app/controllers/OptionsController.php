<?php

class OptionsController extends BaseController {

	public function GridOptions()
	{
		$filter = DataFilter::source(Options::with('subcategories'));
        $filter->attributes(array('class'=>'form-inline'));
        $filter->add('name','Buscar por Nombre', 'text');
        $filter->submit('search');
        $filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('name','Nombre', true);
        $grid->add('subcategories.name','Sub Categoría');
        $grid->edit(url().'/options/edit', 'Editar/Borrar','modify|delete');
        $grid->link('/options/create', 'Crear Nueva', 'TR');
        $grid->link("subcategories/list","Lista Sub-Categorías", "TR");
        $grid->orderBy('name','desc'); 
        $grid->paginate(10); 

        return View::make('subcategories.list', compact('filter', 'grid'));
	}

	public function CrudOptions(){
        $edit = DataEdit::source(new Options());
        $edit->label('Opciones');
        $edit->link("options/list","Lista Opciones", "TR")->back();
        $edit->add('name','Nombre', 'text')->rule('required');
        $edit->add('description','Descripción', 'textarea')->rule('required');
        $edit->add('id_subcategories','Sub Categoría','select')->options(SubCategories::lists('name', 'id'));
        $edit->add('image','Imagen', 'image')->move('uploads/options/')->fit(240, 160)->preview(120,80);

        return View::make('subcategories.crud', compact('edit'));
    }

}
