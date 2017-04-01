<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    protected $table ='peran';
   public function Pengguna(){
   	return $this->belongsToMany(Pengguna::class);
   	//relasi belongsToMany disini untuk menunjukan adanya relasi many to many
   	//dimana peran juga dimiliki oleh pengguna lain, dan banyak pengguna dapat memiliki banyak peran
   }
}
