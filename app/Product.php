<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','price','photo','description', 'created_by'];

    //İlişkili olduğu alanlar
    public function user(){
        return $this->hasMany('App\User','id','created_by');
    }
}
