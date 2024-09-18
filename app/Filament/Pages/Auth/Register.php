<?php

namespace App\Filament\Pages\Auth;

use App\Models\Role;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Events\Auth\Registered;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Pages\Auth\Register as AuthRegister;
use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class Register extends AuthRegister
{
    protected function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);

        $user->assignRole(Role::TENANT);

        return $user;
    }
}
