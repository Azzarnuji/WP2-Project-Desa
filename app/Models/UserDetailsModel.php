<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetailsModel extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $primaryKey = 'id';
    protected $useIncrement = true;
    protected $fillable = ['owner_userid','name','number_phone','address'];
    public $timestamps = false;
}
