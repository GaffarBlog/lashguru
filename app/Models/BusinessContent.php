<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessContent extends Model
{
    use HasFactory;
    protected $table = 'business_content';
    protected $primarykey = 'id';
    protected $fillable = ['level_one','level_two','level_three','level_four','level_five','content'];
}