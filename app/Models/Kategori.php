<?php

namespace App\Models;

use CodeIgniter\Model;
// model kategori
class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori', 'timestamp'];
}
