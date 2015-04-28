<?php
class SubCategories extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subcategories';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function categories(){
        return $this->belongsTo('Categories', 'id_categories');
    }

}