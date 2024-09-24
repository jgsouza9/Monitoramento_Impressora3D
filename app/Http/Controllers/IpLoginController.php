<?php

namespace App\Http\Controllers;

use App\Models\IpAddress;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class IpLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'ip_address' => ['required', 'ip'],
        ]);

        // Verificar se o IP está na lista de IPs permitidos
        $ipAddress = $request->input('ip_address');
        $ipRecord = IpAddress::where('ip_address', $ipAddress)->first();

        if ($ipRecord) {
            $request->session()->regenerate();
            return redirect()->intended('video');
        }
        
        // Se o IP não estiver permitido, lançar uma exceção de validação
        throw ValidationException::withMessages([
            'ip_address' => 'Permissão negada para este endereço de IP',
        ]);
    }
}
