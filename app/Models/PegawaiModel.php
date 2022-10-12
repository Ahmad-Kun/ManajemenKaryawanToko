<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class PegawaiModel extends Model{
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'nip';
    protected $allowedFields = ['nip', 'nama', 'alamat', 'no_hp', 'status', 'jabatan', 'foto'];
}