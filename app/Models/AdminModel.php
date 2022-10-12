<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AdminModel extends Model{
    protected $table = 'tb_pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['id_pengguna','nama_pengguna','username','password', 'level'];
}