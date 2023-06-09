<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAsisten extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['Username', 'Password'];
}
