<?php

namespace floreriaLara;

use Illuminate\Database\Eloquent\Model;

class Arreglo extends Model
{
    protected $fillable = ['nombre', 'imagen', 'comentarios'];
	    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */

	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
