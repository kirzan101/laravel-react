<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserGroupPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_group_id',
        'permission_id',
    ];

    /**
     * Associate user group permission to permissions
     *
     * @return BelongsTo
     */
    public function permission() : BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }

    /**
     * Associate user group permission to user groups
     *
     * @return BelongsTo
     */
    public function userGroup() : BelongsTo
    {
        return $this->belongsTo(UserGroup::class);
    }
}
