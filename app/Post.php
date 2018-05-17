<?php

namespace App;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;
use App\Category;


class Post extends Model
{
    use Resizable;
    
    public function category()
	{
		return $this->belongsTo(Category::class);
	}

}
