<?php

namespace App\Services;

use App\Models\CheckList;

class CheckListService
{
	private CheckList $CheckListModel;

	public function __construct()
	{
		$this->CheckListModel = new CheckList();
	}

	public function listEvents()
	{
		$events = $this->CheckListModel->all();

		return $events;
	}
}