<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Account extends Eloquent

{

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [

       'name', 'email', 'password'

   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */

   protected $hidden = [

       'password'

   ];

   /*
   * Get Todo of User
   *
   */


 }