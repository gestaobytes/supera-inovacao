<?php

namespace App\Repositories\v1;

use App\Models\Vehiclemodel;
use App\Interfaces\v1\VehiclemodelInterface;


class VehiclemodelRepository implements VehiclemodelInterface
{
    private $model, $commons;

    public function __construct(Vehiclemodel $model) {
        $this->model = $model;

    }

	public function index()
	{
        $vehiclemodels = $this->model->paginate(10);
        return view('admin.vehiclemodels.index', compact('vehiclemodels'));
	}

	public function show($id)
	{
		$vehiclemodels = $this->model->where('id', $id)->first();
		$this->commons->insertLog($vehiclemodels->id, 'vehiclemodels', 'R');
		return view('admin.vehiclemodels.show', compact('vehiclemodels'));
	}

	public function details($id)
	{
		return $this->model->where('id', $id)->first()->makeHidden(['created_at','updated_at','deleted_at']);
	}

	public function comboBox() {
		return $this->model->select('id','name')->orderBy('name')->get();
	}

	public function create() {
		return view('admin.vehiclemodels.create');
	}

	public function store($request) {
		$this->model->create($request->all());

		return redirect()->route('vehiclemodels.index')->with('success', 'Modelo de veículo cadastrado com sucesso!');
	}

	public function edit($id) {
		$vehiclemodels = $this->model->where('id', $id)->first();
		return view('admin.vehiclemodels.edit', compact('vehiclemodels'));
	}

	public function update($id, $request) {
		$model = $this->model->where('id', $id)->first();
		$model->update($request->all());

		return redirect()->route('vehiclemodels.index')->with('success', 'Modelo de veículo atualizado com sucesso!');
	}

	public function delete($id) {
		$model = $this->model->where('id', $id)->first();
		return $model->delete();
	}

	public function destroy($id) {
		$model = $this->model->where('id', $id)->first();
		// return $model->delete();
		$model->delete();
		toastr()->success('Modelo de veículo excluído com sucesso!', 'Sucesso', ["positionClass" => "toast-top-right"]);
		return redirect()->back();
	}

	public function trash() {
		$model = $this->model->onlyTrashed()->get();
	}

	public function restore($id) {
		return $model = $this->model->withTrashed()->where('id', $id)->restore();
	}

}
