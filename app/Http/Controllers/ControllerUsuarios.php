<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Ingreso;
use Illuminate\Validation\Rule;

class ControllerUsuarios extends Controller
{
    public function index(){
    	$usuarios = User::all();
        //$usuarios = DB::table('users')->join('foraneas', 'foraneas.id', '=', 'users.id')->select('users.id','users.name','users.email','users.foraneas_id','foraneas.controlador')->get();
        //dd($usuarios);
    	return view('index', compact('usuarios')); 
    }

    public function users($id){
    	$indice = User::find($id);
    	return view('dinamico', compact('indice'));
    }

    public function ingreso($usuario_id, $foraneas_id){
        $indiceUsuario = User::find($usuario_id);
        $indiceIngreso = Ingreso::find($foraneas_id);
        return view('prueba', compact('indiceUsuario', 'indiceIngreso'));
    }

    public function nuevo(){
        return view('crear');
    }
    public function crear(){
        $info = request()->all();
        User::create([
            'name' => $info['name'],
            'email' => $info['email'],
            'password' => bcrypt($info['password']),
            'foraneas_id' => $info['prof'],
        ]);
        return redirect('usuarios');
    }

    public function editar(User $user){
        return view('editar', ['user'=>$user]);
    }

    public function actualizar(User $user){
        
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => '',
        ]);
        
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        
        $user->update($data);
        return redirect("/usuarios/{$user->id}");
    }

    public function eliminar(User $user){
        $user->delete();
        return redirect('usuarios');
    }


}
