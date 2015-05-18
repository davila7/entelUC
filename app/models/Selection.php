<?php
class Selection extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'selection';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    public function preselection(){
        return $this->belongsTo('Preselection', 'id_preselection');
    }

    public function option(){
        return $this->belongsTo('Options', 'id_option');
    }

    public function user(){
        return $this->belongsTo('User', 'id_user');
    }

}