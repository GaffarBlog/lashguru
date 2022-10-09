<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SvgMainContent extends Model
{
    use HasFactory;
    public function subCategory(){
        return $this->hasOne(SubCatManageSvgFile::class, 'id', 'sub_cat_manage_svg_file_id');
    }
}
