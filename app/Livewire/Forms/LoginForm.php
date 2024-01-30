<?php

namespace App\Livewire\Forms;

use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }

        public function login(): RedirectResponse
        {
//            dd($this->email, $this->password);
            $credentials = $this->validate();

            if (auth()->attempt($credentials)) {
                redirect()->intended(route('dashboard.index'));
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
}
