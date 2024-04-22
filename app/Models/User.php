<?php
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Model;
 class User extends Model{
 protected $table = 'tbluser1';
 // column sa table
 protected $fillable = [
 'username', 'password'
 ];

 public $timestamps = false;

 protected $hidden = ['password'];
 }