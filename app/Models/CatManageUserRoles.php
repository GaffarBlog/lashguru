<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatManageUserRoles extends Model
{
    use HasFactory;
    protected $table = 'cat_manage_user_roles';
    protected $primarykey = 'id';
    protected $fillable = ['user_role'];
}
