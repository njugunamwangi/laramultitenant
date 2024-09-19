<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as ModelsTenant;

class Tenant extends ModelsTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
