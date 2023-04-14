<?php

namespace App\Models\Iceburg;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $table = 'ice_roles';

    public function module(): Collection
    {
        return $this->belongsTo(Module::class, 'id', 'module_id');
    }

    public function permissions(): Collection
    {
        return $this->hasMany(Permission::class, 'role_id', 'id');
    }
}
