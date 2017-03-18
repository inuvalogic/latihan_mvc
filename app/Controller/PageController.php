<?php

namespace Mvc\Controller;

use Mvc\Model\ArtikelModel;
use Mvc\Model\KontakModel;

class PageController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$latest = ArtikelModel::latest();
		$sidebar = ArtikelModel::other($latest['id']);

		$isi_halaman = $this->loadView('page/home', array(
			'latest' => $latest,
			'sidebar' => $sidebar,
		));
		
		echo $this->loadView('layout/base', array('content' => $isi_halaman));
	}

	public function aboutAction()
	{
		$isi_halaman = $this->loadView('page/about');
		echo $this->loadView('layout/base', array('content' => $isi_halaman));
	}

	public function contactAction()
	{
		$hasil = '';

		if (isset($_POST['submit']))
		{
			$nama  = filter_var($_POST['nama'], FILTER_SANITIZE_SPECIAL_CHARS);
			$telp  = filter_var($_POST['telp'], FILTER_SANITIZE_SPECIAL_CHARS);
			$pesan = filter_var($_POST['pesan'], FILTER_SANITIZE_SPECIAL_CHARS);
			
			$hasil = KontakModel::simpan($nama, $telp, $pesan);
		}

		$isi_halaman = $this->loadView('page/contact', array(
			'hasil' => $hasil
		));

		echo $this->loadView('layout/base', array('content' => $isi_halaman));
	}
}

