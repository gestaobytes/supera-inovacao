<?php

namespace App\Interfaces\v1;

use App\Http\Requests\VehicleRequest;

interface VehicleInterface {

	public function index();
	public function show($id);
	public function details($id);
	public function create();
	public function store(VehicleRequest $request);
	public function edit($id);
	public function update($id, VehicleRequest $request);
	public function delete($id);
	public function destroy($id);

}
