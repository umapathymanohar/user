<?php

class Role extends Eloquent{
 
     public function user()
    {
        return $this->belongsToMany('User');
    }
    

}
