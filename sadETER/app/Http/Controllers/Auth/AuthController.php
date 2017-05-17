<?php

namespace sadETER\Http\Controllers\Auth;

use sadETER\User;
use sadETER\Aluno;
use sadETER\Professor;
use sadETER\Coordenador;
use Validator;
use sadETER\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Request;
use Input;
use Auth;

class AuthController extends Controller
{

    public function postLogin()
    {
        $userdata = array('email' => Input::get('email'),
            'password' => Input::get('password'),
        );

        
        if(Auth::attempt($userdata)){
            $email = Auth::user()->email;
            $tipo = Auth::user()->tipo;
            
            $resultadoConsulta = [];

            
            if($tipo == "Aluno") {
                $consulta = Aluno::where('email', '=',  Auth::user()->email)->get();
                foreach ($consulta as $a) {
                    $resultadoConsulta[] =  $a->email;
                }
                if (count($resultadoConsulta) == 0) {
                    return view('negado');
                } else {
                    if ($resultadoConsulta[0] == $email) {
                        return redirect('/aluno');
                    } else {return view('negado');}

                }
               
            }else if($tipo == "Professor"){
                $consulta = Professor::where('email', '=',  Auth::user()->email)->get();
                foreach ($consulta as $a) {
                    $resultadoConsulta[] =  $a->email;
                }
                if (count($resultadoConsulta) == 0) {
                    return view('negado');
                } else {
                    if ($resultadoConsulta[0] == $email) {
                        return redirect('/professor');
                    } else {return view('negado');}

                }
            }else if($tipo == "Coordenador"){
                $consulta = Coordenador::where('email', '=',  Auth::user()->email)->get();
                foreach ($consulta as $a) {
                    $resultadoConsulta[] =  $a->email;
                }
                if (count($resultadoConsulta) == 0) {
                    return view('negado');
                } else {
                    if ($resultadoConsulta[0] == $email) {
                        return redirect('/coordenador');
                    } else {return view('negado');}

                }
            }
            }else{
                return view('negado');
            }
    }
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tipo' => $data['tipo'],
        ]);
    }
}
