<?php

namespace App\Interfaces\v1;

use App\Http\Requests\UserRequest;

interface UserInterface {

	public function index();
	public function show($id);
	public function details($id);
	public function comboBox();
	public function create();
	public function store(UserRequest $request);
	public function edit($id);
	public function update($id, UserRequest $request);
	public function delete($id);
	public function destroy($id);

}
