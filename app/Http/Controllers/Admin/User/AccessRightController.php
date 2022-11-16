<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AccessRightController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $roles = Role::orderBy('name', 'ASC')->get();
            return datatables()
                ->of($roles)
                ->addIndexColumn()
                ->addColumn('role', function ($role) {
                    return $role->name;
                })
                ->addColumn('permissions', function ($role) {
                    return 'Permissions';
                })
                ->addColumn('action', function ($role) {
                    return 'Aksi';
                })
                ->make(true);
        }

        return view('admin.access-rights.index');
    }
}
