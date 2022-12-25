<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Interfaces\v1\VehicleInterface;
use App\Http\Requests\VehicleRequest;


class VehicleController extends Controller
{
    private $interface;

    public function __construct(VehicleInterface $interface)
    {
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

    public function create()
    {
        return $this->interface->create();
    }

    public function store(VehicleRequest $request)
    {
        return $this->interface->store($request);
    }

    public function edit($id)
    {
        return $this->interface->edit($id);
    }

    public function update($id, VehicleRequest $request)
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
