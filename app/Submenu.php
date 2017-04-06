<?php

namespace App;
use App\Menu;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    public function menu()
    {
    	return $this->belongsTo('Menu');
    }

}
