<?php

class usersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->beforefilter('csrf',array('on'=>'post'));
	}
	public function index()
	{
	   return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
      

	}
    public function processlogin()
    {
   	    $rules=array(

             'email'=>array('required'),
             'password'=>array('Required')
        );     
   	   	$validator=Validator::make(Input::all(),$rules);
   	   	if($validator->fails())
   	   	{
   	   		return View::make('users.login_error')->withErrors($validator)->withInput(Input::except('password'));
   	   	}
   	   	else{
	   	   		$userdata=array(
	              'email'=>Input::get('email'),
	              'password'=>Input::get('password')

	   	   		);
	   	   		if(Auth::attempt($userdata)){
	   	   			echo "Success";
	   	   		}
	   	   		else
	   	   		{
	   	   			return View::make('users.login_error')->withlogin_error('Login credentials incorrect')->withInput(Input::except('password'));
	   	   		}
	   	}		

   	   	
   	    
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()//  stores or creates a new user in the system.
	{
		$rules=array(
              'username'=>array('required','unique:users,username'),
              'password'=>array('Required'),
              'email'=>array('required','unique:users,email'),
               'name'=>array('required'),
               'surname'=>array('required')
       			);
		$validator=Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::route('users.index')->withErrors($validator)->withInput();
		}
		else{

		$username= Input::get('username');
		$password= Input::get('password');
        $password=Hash::make($password);  // creating a hashed password
		$email= Input::get('email');
   	$name= Input::get('name');
   	$surname= Input::get('surname');
		$user_info=new User();
		$user_info->username=$username;
		$user_info->password=$password;
		$user_info->email=$email;
    $user_info->name=$name;
    $user_info->surname=$surname;
		$user_info->save();	
		$message="account created successfully";
		return View::make('users.index')->withmessage($message);// display the success message on the signup page
       }

	}

   public function list_users(){
   	  $users=User::get();
   	   return View::make('users.edit')->withusers($users);
   }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
