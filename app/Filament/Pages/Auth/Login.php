<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as FilamentLoginPage;

class Login extends FilamentLoginPage
{
    public function mount(): void
    {
        parent::mount();

        if (app()->environment('local')) {
            $this->form->fill([
                'email' => 'test@example.com',
                'password' => 'secret',
            ]);
        }
    }
}
