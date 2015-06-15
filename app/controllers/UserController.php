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

    public function LoginWithFacebook() {

        // get data from input
        $code = Input::get( 'code' );

        // get fb service
        $fb = OAuth::consumer( 'Facebook' );

        // check if code is valid

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $fb->request( '/me' ), true );

            $user = User::where('facebook', $result['id'])->first();
            if(!isset($user)){
                $user = new User;
                $user->username = $result['name'];
                $user->facebook = $result['id'];
                $user->save();
            }
            Auth::login($user);
            return Redirect::to('/');

        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
             return Redirect::to( (string)$url );
        }
    }

    public function LoginWithTwitter() {

    // get data from input
    $token = Input::get( 'oauth_token' );
    $verify = Input::get( 'oauth_verifier' );

    // get twitter service
    $tw = OAuth::consumer( 'Twitter' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $token ) && !empty( $verify ) ) {

        // This was a callback request from twitter, get the token
        $token = $tw->requestAccessToken( $token, $verify );

        // Send a request with it
        $result = json_decode( $tw->request( 'account/verify_credentials.json' ), true );

        $user = User::where('twitter', $result['id'])->first();
            if(!isset($user)){
                $user = new User;
                $user->username = $result['name'];
                $user->twitter = $result['id'];
                $user->save();
            }
        Auth::login($user);
        return Redirect::to('/');

        }
        // if not ask for permission first
        else {
            // get request token
            $reqToken = $tw->requestRequestToken();

            // get Authorization Uri sending the request token
            $url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

            // return to twitter login url
            return Redirect::to( (string)$url );
        }
    }

    public function Login(){
        $rules = array('email' => 'required|email');

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()){
          return Redirect::to('/')->withErrors($validator);
        }else{
            $userdata = array(
            'email' => Input::get('email'),
            'password'=> Input::get('password')
            );
            $categories = Categories::with('subcategories')->get();
            if(Auth::attempt($userdata, true)){
                return Redirect::to('/');
            }else{
                return Redirect::to('/')->withErrors(array('message' => 'Usuario y contraseña incorrectas.'));
            }
        }
    }
    
    public function Logout(){
		Auth::logout();
        $categories = Categories::with('subcategories')->get();
        return Redirect::to('/');
        //return View::make('home.home')->with('categories',$categories)
		//							->with('error_login', false);
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
        $grid->add('{{ !empty($facebook) }}','Facebook');
        $grid->add('{{ !empty($twitter) }}','Twitter');
        $grid->add('esAdmin','Admin');
        $grid->add('codigo','Codigo');
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
        $edit->add('codigo','Código', 'text')->rule('required');
        $edit->add('password','Password', 'password');
        $edit->add('active','Activo','checkbox');
        
        return $edit->view('user.crud', compact('edit'));
    }

}
