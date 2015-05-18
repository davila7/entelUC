<?php
class Orders extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function selection(){
        return $this->belongsTo('Selection', 'id_selection');
    }

    public function user(){
        return $this->belongsTo('User', 'id_user');
    }

}