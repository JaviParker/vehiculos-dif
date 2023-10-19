<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mantenimiento
 * 
 * @property int $Mantenimiento_id
 * @property string $Tipo_servicio
 * @property float $Costo
 * @property Carbon $fecha
 * @property int $Kilometraje
 * @property string $Descripcion
 * @property int $Proveedor_id
 * @property string $Num_serie
 * 
 * @property Vehiculo $vehiculo
 * @property Proveedore $proveedore
 *
 * @package App\Models
 */
class Mantenimiento extends Model
{
	protected $table = 'Mantenimiento';
	protected $primaryKey = 'Mantenimiento_id';
	public $timestamps = false;

	protected $casts = [
		'Costo' => 'float',
		'fecha' => 'datetime',
		'Kilometraje' => 'int',
		'Proveedor_id' => 'int'
	];

	protected $fillable = [
		'Tipo_servicio',
		'Costo',
		'fecha',
		'Kilometraje',
		'Descripcion',
		'Proveedor_id',
		'Num_serie'
	];

	public function vehiculo()
	{
		return $this->belongsTo(Vehiculo::class, 'Num_serie');
	}

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'Proveedor_id');
	}
}
