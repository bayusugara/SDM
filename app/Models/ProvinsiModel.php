<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'provinsi';

    public function tampil()
    {
        return $this->get();
    }
}
