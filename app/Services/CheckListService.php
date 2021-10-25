<?php

namespace App\Services;

use App\Models\CheckList;

class CheckListService
{
	private CheckList $checkListModel;

	public function __construct()
	{
		$this->checkListModel = new CheckList();
	}

	public function listEvents()
	{
		$events = $this->checkListModel->all();

		return $events;
	}

	public function store(array $data) : void
	{
		$this->checkListModel->create($data);
	}

	public function delete(int $id) : void
	{
		$this->checkListModel->find($id)->delete();
	}

	public function find(int $id)
	{
		return $this->checkListModel->find($id);
	}

	public function update(int $id, array $data)
	{
		$this->checkListModel->find($id)->update($data);
	}
}