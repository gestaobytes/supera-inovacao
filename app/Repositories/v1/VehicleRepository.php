<?php

namespace App\Repositories\v1;

use App\Models\Vehicle;
use App\Interfaces\v1\VehicleInterface;

use App\Models\Vehiclemodel;

class VehicleRepository implements VehicleInterface
{
    private $model, $commons;

    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $vehicles = $this->model->paginate(10);
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function show($id)
    {
        $vehicles = $this->model->where('id', $id)->first();
        $this->commons->insertLog($vehicles->id, 'vehicles', 'R');
        return view('admin.vehicles.show', compact('vehicles'));
    }

    public function details($id)
    {
        return $this->model->where('id', $id)->first()->makeHidden(['created_at', 'updated_at', 'deleted_at']);
    }

    public function create()
    {
        $vehiclemodels = Vehiclemodel::all();
        return view('admin.vehicles.create', compact('vehiclemodels'));
    }

    public function store($request)
    {
        $this->model->create($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Veiculo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $vehiclemodels = Vehiclemodel::all();
        $vehicles = $this->model->where('id', $id)->first();
        return view('admin.vehicles.edit', compact('vehicles', 'vehiclemodels'));
    }

    public function update($id, $request)
    {
        $model = $this->model->where('id', $id)->first();
        $model->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Veiculo atualizado com sucesso!');
    }

    public function delete($id)
    {
        $model = $this->model->where('id', $id)->first();
        return $model->delete();
    }

    public function destroy($id)
    {
        $model = $this->model->where('id', $id)->first();
        // return $model->delete();
        $model->delete();
        toastr()->success('Veiculo excluído com sucesso!', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function trash()
    {
        $model = $this->model->onlyTrashed()->get();
    }

    public function restore($id)
    {
        return $model = $this->model->withTrashed()->where('id', $id)->restore();
    }
}
