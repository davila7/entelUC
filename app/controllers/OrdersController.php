<?php

class OrdersController extends BaseController {

	public function GridOrders()
	{
		$filter = DataFilter::source(Orders::with('user','selection'));
        //$filter->attributes(array('class'=>'form-inline'));
        //$filter->add('name','Buscar por Nombre', 'text');
        //$filter->submit('search');
        //$filter->reset('reset');

        $grid = DataSet::source($filter);
        $grid->paginate(10);
				$grid->build();

        return View::make('orders.list', compact('filter', 'grid'));
	}

	public function GetSelection($id, $id_user){
        //echo $id;
        //echo $id_user;
                //$selection = DB::table('selection')->first();
				$selection = Selection::find($id);
                //echo $selection->id_subcategories;
				$user = User::find($id_user);
				return View::make('orders.selection', compact('selection','user'));
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
                            ->where('id_user', $id_user)->delete();
            $id_subcategories = Options::find($id_option)->id_subcategories;
            $sel = new Selection;
            $sel->id_user = $id_user;
            $sel->id_option = $id_option;
            $sel->id_subcategories = $id_subcategories;
            $sel->id_preselection = $id_pre;
            $sel->save();

        return Response::json('ok');
    }

    public function SendOrder($email, $codigo, $address){
        $user = User::where('email', $email)->where('codigo',$codigo)->first();
        $msg = 'ok';
        if(isset($user) && $user->active == true){
            $selection = Selection::where('id_user', $user->id)->first();
            if(isset($selection)){
                $order = new Orders;
                $order->status = '1';
                $order->id_selection = $selection->id;
                $order->id_user = $user->id;
                $order->address = $address;
                $order->save();
                $step_one = PreSelection::where('id', $selection->id_preselection)->first()->step_one;
                switch ($step_one) {
                    case '1':
                        $paso_uno = "Blanco";
                        break;
                    case '2':
                        $paso_uno = "Negro";
                        break;
                    case '3':
                        $paso_uno = "Dorado";
                        break;
                    case '4':
                        $paso_uno = "Plateado";
                        break;
                    default:
                        $paso_uno = 'Plateado';
                        break;
                    }
                $name_categoria = SubCategories::find($selection->id_subcategories)->first()->name;
                $option = Options::where('id',$selection->id_option)->first();
                $user_name = $user->username;
                $email = $email;

                $data = array(
                    "user"=>$user_name,
                    "email"=>$email,
                    "paso_uno"=>$paso_uno,
                    "option_name"=>$option->name,
                    "option_color"=>$option->color,
                    "address"=>$address
                    );
                //email al cliente
                $emails = array($email);
                Mail::send('emails.order', $data, function($message) use ($emails)
                {
                    $message->from('own@proyectoentel.com', 'Entel OWN');
                    $message->to($emails, 'test')->subject('Orden recibida');
                });

                //email al admin
                $emails = array('dan.avila7@gmail.com');
                Mail::send('emails.order', $data, function($message) use ($emails)
                {
                    $message->from('own@proyectoentel.com', 'Entel OWN');
                    $message->to($emails, 'test')->subject('Nueva Orden');
                });


            }else{
                $msn = 'not ok 1';
            }
        }else{
            $msg = 'not ok 2';
        }
        return Response::json($msg);

    }

}
