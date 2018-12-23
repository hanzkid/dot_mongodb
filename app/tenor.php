<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class tenor extends Eloquent
{
    //
      protected $collection = '162_Tenor';
        public function applicationform(){
    		return $this->belongsTo('App\applicationform','application_form_id','_id');
    	}
}
