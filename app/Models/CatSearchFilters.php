<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatSearchFilters extends Model
{
    use HasFactory;
    protected $table = 'cat_search_filters';
    protected $primarykey = 'id';
    protected $fillable = ['filter_name','level_two','level_three','level_four'];
}
