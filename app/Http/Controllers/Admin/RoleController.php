<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
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
