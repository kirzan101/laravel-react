<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    /**
     * get the list of user group permissions of user group
     *
     * @return HasMany
     */
    public function userGroupPermissions() : HasMany
    {
        return $this->hasMany(UserGroupPermission::class);
    }
}
