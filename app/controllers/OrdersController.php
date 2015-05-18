<?php

class OrdersController extends BaseController {

	public function GridOrders()
	{
		$filter = DataFilter::source(Orders::with('user','selection'));
        //$filter->attributes(array('class'=>'form-inline'));
        //$filter->add('name','Buscar por Nombre', 'text');
        //$filter->submit('search');
        //$filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('status','Status', true);
        $grid->add('user.username','Usuario');
        $grid->edit(url().'/orders/edit', 'Editar/Borrar','modify|delete');
        //$grid->link('/orders/create', 'Crear Nueva', 'TR');
        $grid->link("selection/list","Lista Selecciones", "TR");
        $grid->orderBy('status','desc'); 
        $grid->paginate(10); 

        return View::make('orders.list', compact('filter', 'grid'));
	}

	public function CrudOrders(){
        $edit = DataEdit::source(new Options());
        $edit->label('Ordenes');
        $edit->link("orders/list","Lista Ordenes", "TR")->back();
        $edit->add('status','Status', 'text')->rule('required');
        return View::make('orders.crud', compact('edit'));
    }

    public function GridSelection()
    {
        $filter = DataFilter::source(Selection::with('user','option','preselection'));
        //$filter->attributes(array('class'=>'form-inline'));
        //$filter->add('name','Buscar por Nombre', 'text');
        //$filter->submit('search');
        //$filter->reset('reset');
        
        $grid = DataGrid::source($filter);  
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true);
        $grid->add('option.subcategories.categories.name','Categoría');
        $grid->add('option.subcategories.name','Subcategoría', 'id_subcategories');
        $grid->add('option.name','Option', 'id_option');
        $grid->add('user.username','Usuario', 'id_user');
        $grid->add('preselection.step_one','Preselection Step 1');
        $grid->add('preselection.step_two','Preselection Step 2');
        //$grid->edit(url().'/orders/edit', 'Editar/Borrar','modify|delete');
        //$grid->link('/orders/create', 'Crear Nueva', 'TR');
        $grid->link("selection/list","Lista Selecciones", "TR");
        $grid->orderBy('id','desc'); 
        $grid->paginate(10); 

        return View::make('selection.list', compact('filter', 'grid'));
    }


    public function getSaveSelection($id_option, $id_user){
        $id_pre = Session::get('id_preselection');
        $subcat = DB::table('selection')
                            ->where('id_user', $id_user)
                            ->lists('id_subcategories');
        $id_subcategories = Options::find($id_option)->id_subcategories;

        if(in_array($id_subcategories, $subcat)){
            $sel = Selection::where('id_user', $id_user)
                            ->where('id_subcategories', $id_subcategories)
                            ->first();
            $sel->id_option = $id_option;
            $sel->save();
        }else{
            $sel = new Selection;
            $sel->id_user = $id_user;
            $sel->id_option = $id_option;
            $sel->id_subcategories = $id_subcategories;
            $sel->id_preselection = $id_pre;
            $sel->save();
        }
    }

}
