<?php
$menu=array(
	'Users'=>array(		
		'icon'=>'fa fa-users',
		'slug'=>'pengguna',
		'child'=>array(
				'All User'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/pengguna",
					'target'=>"",
					),
				'Add User'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/pengguna/add",
					'target'=>"",
					),				
			),
	),
	'CMS'=>array(		
		'icon'=>'fa fa-globe',
		'slug'=>'cms',
		'child'=>array(
				'Kategori Berita'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/cms/kategori",
					'target'=>"",
					),
				'Semua Berita'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/cms/berita",
					'target'=>"",
					),
				'Tambah Berita'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/cms/berita/add",
					'target'=>"",
					),
				'Semua Halaman'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/cms/halaman",
					'target'=>"",
					),
				'Tambah Halaman'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/cms/halaman/add",
					'target'=>"",
					),
			),
	),
	'Produk'=>array(		
		'icon'=>'fa fa-cube',
		'slug'=>'produk',
		'child'=>array(				
				'Kategori'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/produk/kategori",
					'target'=>"",
					),
				'Merek'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/produk/merek",
					'target'=>"",
					),				
				'Produk'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/produk/produk",
					'target'=>"",
					),
				'Promo'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/produk/promo",
					'target'=>"",
					),
			),
	),
	'Konfigurasi'=>array(		
		'icon'=>'fa fa-wrench',
		'slug'=>'konfigurasi',
		'child'=>array(
				'Aplikasi'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/konfigurasi",
					'target'=>"",
					),
				'Tema'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/konfigurasi/tema",
					'target'=>"",
					),				
			),
	),	
);