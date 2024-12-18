<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
class Client extends Model
{
    use HasFactory;

    protected $table = 'my_client';
    protected $primaryKey = 'id';
    public $incrementing = true;
}