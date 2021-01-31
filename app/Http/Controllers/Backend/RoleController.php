<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::query()
                        ->orderBy('id', 'ASC')
                        ->get();

        return view('backend.role.index')
                                    ->with('roles', $roles);
    }

    public function create(Request $request)
    {
        return view('backend.role.create');
    }

    public function edit(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        return view('backend.role.edit')
                                    ->with('role', $role);
    }

    public function update(Request $request, $id)
    {
        $request->validate(Role::rules());
        $data = $request->input();
        $role = Role::findOrFail($id);
        $this->save($data, $role);

        return view('backend.role.edit')
                                    ->with('role', $role);
    }

    public function store(Request $request)
    {
        $request->validate(Role::rules());

        $data = $request->input();

        $this->save($data);

        return redirect()->route('backend.role.index');
    }

    private function save($data, Role $role = null)
    {
        if ($role == null)
        {
            $role = new Role;
            $role->fill($data);
        }
        else
        {
            $role->fill($data);
        }

        DB::beginTransaction();
        try
        {
            $role->save();
            DB::commit();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            //Handle exceptions
            return view('backend.exception')->with('e', $e);
        }

        return $role;
    }
}
