<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CheckListService;

class checkListController extends Controller
{
    private CheckListService $checkListService;

    public function __construct() {
        $this->checkListService = new CheckListService();
    }

    public function index()
    {
        $events = $this->checkListService->listEvents();

        return view('dashboard', compact('events'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->checkListService->store($request->all());
        Session()->flash('success', 'Incidente cadastrado.');
        return redirect('/');
    }

    public function delete(int $id)
    {
        $this->checkListService->delete($id);
        Session()->flash('success', 'Incidente removido.');
        return redirect('/');
    }

    public function show(int $id)
    {
        $event = $this->checkListService->find($id);
        return view('update', compact('event'));
    }

    public function update(int $id, Request $request)
    {
        $event = $this->checkListService->update($id, $request->all());
        Session()->flash('success', 'Incidente atualizado.');
        return redirect('/');
    }
}
