<?php
class Venta extends Eloquent {
	protected $table = 'venta';

	static public function Ventas()
	{
		return DB::select("select ve.nombre, count(*) as numero
from vendedor ve, venta v
where v.vehiculo_id = ve.id
group by ve.nombre");
	}
}