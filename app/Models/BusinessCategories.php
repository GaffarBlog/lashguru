<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategories extends Model
{
    use HasFactory;
    protected $table = 'business_categories';
    protected $primarykey = 'id';
    protected $fillable = ['category_name','level_two','level_three','level_four','level_five','level_six'];
}