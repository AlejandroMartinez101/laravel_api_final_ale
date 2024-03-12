<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticione extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descripcion', 'destinatario', 'firmantes', 'estado'];
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
    public function firmas(){
        return $this->belongsToMany('App\Models\User', 'peticione_user');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
