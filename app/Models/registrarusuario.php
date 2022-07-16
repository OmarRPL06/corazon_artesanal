<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrarusuario extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'idUser';
    protected $keyTipe = 'int';
    public    $incrementing = true;
    protected $fillable = ['idUser','nombre','apellido_Paterno','apellido_Materno','telefono','email','password','user','tipo'];
    protected $hidden = ['password'];
    public $timesTamps = false;
    public $updated_at = false;
    public $created_at = false;

}
