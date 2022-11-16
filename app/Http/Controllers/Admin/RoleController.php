<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Services\ModelCRUDService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    private $crud;

    public function __construct(ModelCRUDService $crud)
    {
        $this->crud = $crud;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $roles = Role::orderBy('created_at', 'DESC')->get();
            return datatables()
                ->of($roles)
                ->addIndexColumn()
                ->addColumn('action', function ($role) {
                    return view('admin.role.action', [
                        'role' => $role
                    ]);
                })
                ->make(true);
        }
        return view('admin.role.index');
    }

    public function store(RoleRequest $request)
    {

        return $this->crud->create($request->validated(), new Role());
    }

    public function update(RoleRequest $request, Role $role)
    {
        return $this->crud->update($request->validated(), $role);
    }

    public function destroy(Role $role)
    {
        return $this->crud->delete($role);
    }

    /** Additional Function */
    public function listRole(Request $request)
    {
        if ($request->ajax()) {
            $roles    = Role::when($request->search, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%');
            })->get();
            $arr_data = new Collection();

            if ($roles != null) {
                foreach ($roles as $role) {
                    $arr_data->push([
                        'id'   => $role->id,
                        'text' => $role->name,
                    ]);
                }
            }

            return response()->json($arr_data);
        }
    }
}
