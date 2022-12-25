<?php

namespace App\Interfaces\v1;

use App\Http\Requests\MaintenanceRequest;

interface MaintenanceInterface {

	public function index();
	public function show($id);
	public function details($id);
	public function create();
	public function store(MaintenanceRequest $request);
	public function edit($id);
	public function update($id, MaintenanceRequest $request);
	public function delete($id);
	public function destroy($id);

}
