<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'depan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login']="login";
$route['logout']="login/logout";
$route['daftar']="login/daftar";
$route['berita']="berita";
$route['berita/(:any)']="berita/baca/$1";
$route['halaman/(:any)']="berita/halaman/$1";
$route['informasi/(:any)']="informasi/index/$1";

$route['katalog']="produk/index";
$route['checkout']="produk/selesai";
$route['emptycart']="produk/kosongkan";
$route['keranjang']="produk/keranjang";
$route['produk/kategori/(:number)/(:any)']="produk/kategori/$1/$2";
$route['produk/add/(:any)']="produk/beli/$1";
$route['produk/delete/(:any)']="produk/hapus/$1";
$route['produk/histori/bayar/(:any)']="pembayaran/index/$1";
$route['produk/(:any)/(:any)']="produk/detailproduk/$1/$2";
$route['konfirmasi']="pembayaran/konfirmasi";
$route['tracking']="pembayaran/cektagihan";