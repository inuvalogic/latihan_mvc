<?php

namespace Mvc\Controller;

use Mvc\Model\ArtikelModel;

class ArtikelController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$artikel = ArtikelModel::all();

		$isi_halaman = $this->loadView('artikel/list', array('data_artikel' => $artikel));

		echo $this->loadView('layout/base', array('content' => $isi_halaman));
	}

	public function detailAction()
	{
		$id = $this->uri_segment(2);
		$artikel = ArtikelModel::one($id);

		if ($artikel==false){
			$this->loadNotFound();
		} else {
			$isi_halaman = $this->loadView('artikel/detail', array('row' => $artikel));
			echo $this->loadView('layout/base', array('content' => $isi_halaman));
		}
	}
}