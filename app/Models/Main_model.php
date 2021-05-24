<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Main_model extends Model
{
    protected $table = 'form';
 
    protected $allowedFields = ['jmeno', 'email', 'heslo', 'heslo_znova'];
}