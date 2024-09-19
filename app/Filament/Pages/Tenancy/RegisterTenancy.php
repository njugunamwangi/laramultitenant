<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Tenant;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Support\Facades\Auth;

class RegisterTenancy extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register Subdomain';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->alpha()
                    ->required(),
            ]);
    }

    protected function handleRegistration(array $data): Tenant
    {
        $user = User::find(Auth::id());

        $tenant = Tenant::create([
            'name' => $data['name'],
        ]);

        $name = str_replace(' ', '', $data['name']);

        $tenant->domains()->create([
            'domain' => strtolower($name) . '.' . config('tenancy.central_domains')[0],
        ]);

        $user->tenants()->attach($tenant->id);

        return $tenant;
    }
}
