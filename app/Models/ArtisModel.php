<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtisModel extends Model
{
    protected $table = 'biodata_artis';
    protected $primaryKey = 'uuid';
    protected $allowedFields = ['nama','tempat_lahir','tanggal_lahir','foto','alamat_tinggal','id_kecamatan'];

    public function tampil()
    {
        return $this->get();
    }

    public function simpan($data)
    {
        $this->insert($data);
    }

    public function tampil_edit($data)
    {
        return $this->where(['uuid' => $data])->first();
    }

    public function hapus($id)
    {
        $this->delete($id);
    }

    public function edit($id, $data)
    {
        $this->update($id, $data);
    }
}
