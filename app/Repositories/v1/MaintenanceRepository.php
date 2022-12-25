<?php

namespace App\Repositories\v1;

use App\Models\Maintenance;
use App\Interfaces\v1\MaintenanceInterface;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Validator;

class MaintenanceRepository implements MaintenanceInterface
{
    private $model, $commons;

    public function __construct(Maintenance $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $registers = $this->model->paginate(10);
        return view('admin.maintenances.index', compact('registers'));
    }

    public function show($id)
    {
        $maintenances = $this->model->where('id', $id)->first();
        return view('admin.maintenances.show', compact('maintenances'));
    }

    public function details($id)
    {
        return $this->model->where('id', $id)->first()->makeHidden(['created_at', 'updated_at', 'deleted_at']);
    }

    public function create()
    {
        $users = User::all();
        $vehicles = Vehicle::all();
        return view('admin.maintenances.create', compact('users', 'vehicles'));
    }

    public function store($request)
    {
        $this->model->create($request->all());
        return redirect()->route('maintenances.index')->with('success', 'Manutenção cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $data = $this->model->where('id', $id)->first();
        $users = User::all();
        $vehicles = Vehicle::all();
        return view('admin.maintenances.edit', compact('data', 'users', 'vehicles'));
    }

    public function update($id, $request)
    {
        $model = $this->model->where('id', $id)->first();
        $model->update($request->all());

        return redirect()->route('maintenances.index')->with('success', 'Manutenção atualizada com sucesso!');
    }

    public function delete($id)
    {
        $maintenances = $this->model->where('id', $id)->first();
        return $maintenances->delete();
    }

    public function destroy($id)
    {
        $maintenances = $this->model->where('id', $id)->first();
        $maintenances->delete();
        toastr()->success('Usuário excluído com sucesso!', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
