<?php

namespace App\Interfaces\v1;

use App\Http\Requests\VehiclemodelRequest;

interface VehiclemodelInterface {

	public function index();
	public function show($id);
	public function details($id);
	public function comboBox();
	public function create();
	public function store(VehiclemodelRequest $request);
	public function edit($id);
	public function update($id, VehiclemodelRequest $request);
	public function delete($id);
	public function destroy($id);

}
