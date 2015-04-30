<?php
class Categories extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	 public function subcategories(){
        return $this->hasMany('SubCategories', 'id_categories');
    }

}