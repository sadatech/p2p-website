<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Content extends Model
{
	public function menu() {
        return $this->belongsTo('Menu');
    }
}
