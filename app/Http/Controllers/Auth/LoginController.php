<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        // Adicionando a validação personalizada para verificar se o usuário existe
        if ($this->guard()->attempt($this->credentials($request), $request->filled('remember'))) {
            return true;
        }

        // Caso o usuário não exista, lançamos uma exceção com a mensagem personalizada
        throw ValidationException::withMessages([
            $this->username() => ['As credenciais fornecidas estão incorretas.'],
        ]);
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $customMessages = [
            'required' => 'O campo :attribute é obrigatório.',
            'email' => 'O email inserido não é válido.',
        ];
        
        $this->validate($request, [
            $this->username() => 'required|string|email|exists:users,email',
            'password' => 'required|string',
        ], $customMessages);

        return $credentials;
    }
}
