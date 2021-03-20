<?php

namespace App\Controllers;

use App\Models\ArtisModel;
use App\Models\KabupatenModel;
use App\Models\ProvinsiModel;
use App\Models\KecamatanModel;

class Artis extends BaseController
{
	public function index()
	{
		$artismodel = new ArtisModel();
		
		$data =
			[
				'title' => "Data Artis",
				'artis' => $artismodel->tampil()->getResult()
			];
		return view('artis', $data);
	}

	public function tambah()
	{
		$provinsimodel = new ProvinsiModel();
		// $kabupatenmodel = new KelasModel();
		// $tes = $kabupatenmodel->tampil(7);
		// print_r($tes);
		// exit();
		$data =
			[
				'title' => "Tambah Artis",
				'fak' => $provinsimodel->tampil()->getResult()
			];
		return view('tambah', $data);
	}

	public function simpan(){
		$model = new ArtisModel();

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = "user.png";
        } else {
            //ambil nama file
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan file ke folder img
            $fileFoto->move('img', $namaFoto);
        }

		$nama = $this->request->getVar('nama');
        $tempat = $this->request->getVar('tempat');
        $tanggal = $this->request->getVar('tanggal');
        $foto = $namaFoto;
        $alamat = $this->request->getVar('alamat');
        $id_kecamatan = $this->request->getVar('kecamatan');

        $data = [
            'nama' => $nama,
            'tempat_lahir' => $tempat,
            'tanggal_lahir' => $tanggal,
            'foto' => $foto,
            'alamat_tinggal' => $alamat,
            'id_kecamatan' => $id_kecamatan
        ];

        $model->simpan($data);
        return redirect()->to('/artis');
	}

	public function edit($id){
		$model = new ArtisModel();
		$kabupatenmodel = new FakultasModel();

		$edit = $model->tampil_edit($id);
        $data = [
            'title' => "Edit",
            'edit' => $edit,
			'fak' => $kabupatenmodel->tampil()->getResult()
        ];

        return view('edit', $data);
	}

	public function hapus($id){
		$model = new ArtisModel();
		$model->hapus($id);
        return redirect()->to('/artis');
	}

	public function tampil_kabkota()
	{
		$kabupatenmodel = new KabupatenModel();

		$id = $this->request->getPost('id');
		// $data = $kabupatenmodel->tampil($id_fakultas);
		$data = $kabupatenmodel->tampil($id);
		echo json_encode($data);
	}

	public function tampil_kecamatan($id)
	{
		$kecamatanmodel = new KecamatanModel();

		// $id_jurusan = $this->request->getPost('id');
		// $data = $kabupatenmodel->tampil($id_fakultas);
		$data = $kecamatanmodel->tampil($id);
		echo json_encode($data);
	}
}
