<?php

namespace App\Repositories\v1;

use App\Models\User;
use App\Interfaces\v1\UserInterface;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;



class UserRepository implements UserInterface
{
    private $model, $commons;

    public function __construct(User $model) {
        $this->model = $model;

    }

	public function index()
	{
		$users = $this->model->paginate(10);
		return view('admin.users.index', compact('users'));
	}

	public function show($id)
	{
		$users = $this->model->where('id', $id)->first();
		$this->commons->insertLog($users->id, 'users', 'R');
		return view('admin.users.show', compact('users'));
	}

	public function details($id)
	{
		return $this->model->where('id', $id)->first()->makeHidden(['created_at','updated_at','deleted_at']);
	}

	public function comboBox() {
		return $this->model->select('id','name')->orderBy('name')->get();
	}

	public function create() {
		return view('admin.users.create');
	}

	public function store($request) {
		$this->model->create($request->all());

		return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
	}

	public function edit($id) {
		$users = $this->model->where('id', $id)->first();
		return view('admin.users.edit', compact('users'));
	}

	public function update($id, $request) {
		$model = $this->model->where('id', $id)->first();
		$model->update($request->all());

		return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
	}

	public function delete($id) {
		$model = $this->model->where('id', $id)->first();
		return $model->delete();
	}

	public function destroy($id) {
		$model = $this->model->where('id', $id)->first();
		// return $model->delete();
		$model->delete();
		toastr()->success('Usuário excluído com sucesso!', 'Sucesso', ["positionClass" => "toast-top-right"]);
		return redirect()->back();
	}

	public function trash() {
		$model = $this->model->onlyTrashed()->get();
	}

	public function restore($id) {
		return $model = $this->model->withTrashed()->where('id', $id)->restore();
	}

}
