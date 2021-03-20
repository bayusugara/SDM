<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';

    public function tampil($id)
    {
        // return $this->where(['id_fakultas' => $id_fakultas])->first();
        return $this->where(['id_kabkota' => $id])->findAll();
    }
}
