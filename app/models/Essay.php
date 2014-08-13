<?php

class Essay extends Eloquent{

	protected $guarded = array('id', 'created_at', 'updated_at');
	
	public function issue() {
		return $this->belongsTo('issue');
	}

}

?>