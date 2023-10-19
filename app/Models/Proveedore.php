<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 * 
 * @property int $Proveedor_id
 * @property int $Customer_id
 * @property string $Nombre
 * @property string $Propietario
 * @property string $RFC
 * @property string $Calle
 * @property string $Colonia
 * @property string $Estado
 * @property int $Codigo_postal
 * 
 * @property Collection|Mantenimiento[] $mantenimientos
 *
 * @package App\Models
 */
class Proveedore extends Model
{
	protected $table = 'Proveedores';
	protected $primaryKey = 'Proveedor_id';
	public $timestamps = false;

	protected $casts = [
		'Customer_id' => 'int',
		'Codigo_postal' => 'int'
	];

	protected $fillable = [
		'Customer_id',
		'Nombre',
		'Propietario',
		'RFC',
		'Calle',
		'Colonia',
		'Estado',
		'Codigo_postal'
	];

	public function mantenimientos()
	{
		return $this->hasMany(Mantenimiento::class, 'Proveedor_id');
	}
}
