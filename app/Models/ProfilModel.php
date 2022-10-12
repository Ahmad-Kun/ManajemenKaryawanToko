<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class ProfilModel extends Model{
    protected $table = 'tb_profil';
    protected $primaryKey = 'id_profil';
    protected $allowedFields = ['id_profil', 'nama_profil', 'alamat', 'bidang'];
}