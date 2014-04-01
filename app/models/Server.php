<?php

	class Server extends Eloquent
	{
		protected $table = 'server';

		public function sites()
	    {
	        return $this->hasMany('Site');
	    }
	}