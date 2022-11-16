<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\ModelCRUDService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $crud;

    public function __construct(ModelCRUDService $crud)
    {
        $this->crud = $crud;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::orderBy('created_at', 'DESC')->get();
            return datatables()
                ->of($users)
                ->addIndexColumn()
                ->addColumn('role', function ($user) {
                    return $user->roles[0]->name;
                })
                ->addColumn('action', function ($user) {
                    return view('admin.users.action', [
                        'user' => $user
                    ]);
                })
                ->make(true);
        }

        return view('admin.users.index');
    }

    public function store(UserRequest $request)
    {
        return $this->crud->create($request->validated(), new User());
    }

    public function update(UserRequest $request, User $user)
    {
        return $this->crud->update($request->validated(), $user);
    }

    public function destroy(User $user)
    {
        return $this->crud->delete($user);
    }
}
