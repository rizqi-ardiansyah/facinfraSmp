<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class BarangNew extends Model
{
	use Userstamps;
	
       // protected $fillable = [ 'kode', 'kode_lokasi', 'tahun_anggaran', 'kode_barang', 'nomor_aset', 'subkelompok_barang', 'merk_type', 'tanggal_perolehan', 'rupiah_satuan', 'ruang', 'kondisi_barang', 'gambar', 'created_by', 'updated_by', 'deleted_by',        ];
       protected $fillable = [ 'kode', 'tahun_anggaran', 'kode_barang', 'nama_barang', 'merk_type', 'tanggal_perolehan', 'rupiah_satuan', 'jumlah','ruang', 'kondisi_barang', 'keterangan','gambar', 'created_by', 'updated_by', 'deleted_by',        ];

}
