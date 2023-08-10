<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function permissons()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function event()
    {
        return $this->belongsToMany(Event::class);
    }
}
