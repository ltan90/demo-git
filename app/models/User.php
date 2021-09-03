<?php
namespace App\Models

class User{
	protected $table = 'users';
	protected $fillable = ['username', 'email', 'password', 'token', 'is_actived'];

}

?>
