<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Interfaces\v1\VehiclemodelInterface;
use App\Http\Requests\VehiclemodelRequest;


class VehiclemodelController extends Controller {
    private $interface;

    public function __construct(VehiclemodelInterface $interface) {
        $this->interface = $interface;
    }

	public function index()
	{
		return $this->interface->index();
	}

	public function show($id)
	{
		return $this->interface->show($id);
	}

	public function details($id)
	{
		return $this->interface->details($id);
	}

	public function comboBox()
	{
		return $this->interface->comboBox();
	}

	public function create()
	{
		return $this->interface->create();
	}

	public function store(VehiclemodelRequest $request)
	{
		return $this->interface->store($request);
	}

	public function edit($id)
	{

		return $this->interface->edit($id);
	}

	public function update($id, VehiclemodelRequest $request)
	{

		return $this->interface->update($id, $request);
	}

	public function delete($id)
	{

		return $this->interface->delete($id);
	}

	public function destroy($id)
	{

		return $this->interface->destroy($id);
	}

}
