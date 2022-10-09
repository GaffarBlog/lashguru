<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CatManageTemplates;
class ManageTemplateFile extends Model
{
    use HasFactory;
    protected $table = 'manage_template_files';

    function category()
    {
        return $this->hasOne(CatManageTemplates::class, 'id', 'category_id');
    }
}
