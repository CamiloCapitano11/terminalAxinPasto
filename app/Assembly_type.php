<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assembly_type extends Model
{
    protected $primaryKey = 'id_assembly_type';
	protected $fillable = [
        'id_assembly',
    ];

    public function Assemblies() {
		return $this->hasOne('App\Assembly','id_assembly','id_assembly');
											   //campoexterno campoDelaTablaBase
	}
}
