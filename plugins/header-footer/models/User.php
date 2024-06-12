<?php
namespace Model;

class User extends Model
{
    protected $table='users';
    protected $allowedColumns = [
        'email',
        'password',
        'date_created',

    ];
    protected $allowedUpdateColumns = [
        'email',
        'password',
        'date_updated',

    ];
 public function __construct()
 {
     dd("this is from the user class");
 }
}