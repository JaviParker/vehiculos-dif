<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property string $Num_Serie
 * @property string $Economico
 * @property string $Tipo
 * @property string $Marca
 * @property int $Modelo
 * @property string $Placa
 * @property string $Propietario
 * @property string|null $Chofer
 * @property string $Resguardo
 * @property int $Poliza
 * @property string|null $Certificado
 * @property string|null $Departamento
 * 
 * @property Collection|Mantenimiento[] $mantenimientos
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'Vehiculos';
	protected $primaryKey = 'Num_Serie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Modelo' => 'int',
		'Poliza' => 'int'
	];

	protected $fillable = [
		'Economico',
		'Tipo',
		'Marca',
		'Modelo',
		'Placa',
		'Propietario',
		'Chofer',
		'Resguardo',
		'Poliza',
		'Certificado',
		'Departamento'
	];

	public function mantenimientos()
	{
		return $this->hasMany(Mantenimiento::class, 'Num_serie');
	}
}
