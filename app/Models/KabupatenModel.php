<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
    protected $table = 'kabkota';

    public function tampil($id)
    {
        // return $this->where(['id_fakultas' => $id_fakultas])->first();
        return $this->where(['id_provinsi' => $id])->findAll();
    }
}
