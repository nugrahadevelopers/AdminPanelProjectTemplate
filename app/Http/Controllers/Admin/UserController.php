<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
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

    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'min:2', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id'  => ['required']
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            $user->assignRole($request->role_id);
        } catch (QueryException $err) {
            DB::rollBack();
            return redirect()->back()->withInput($request->all())->with('error', 'Periksa kembali inputan anda.');
        }

        DB::commit();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna baru berhasil di tambahkan.');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => ['required', 'string', 'min:2', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,id,' . $user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role_id'  => ['required']
        ]);

        DB::beginTransaction();
        try {
            if ($request->password != null) {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);
            } else {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

            if ($request->role_id) {
                $user->assignRole($request->role_id);
            }
        } catch (QueryException $err) {
            DB::rollBack();
            return redirect()->back()->withInput($request->all())->with('error', 'Periksa kembali inputan anda.');
        }

        DB::commit();

        return redirect()->route('admin.users.index')->with('success', 'Data pengguna berhasil di ubah.');
    }

    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            $user->delete();
        } catch (QueryException $err) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Pengguna gagal di hapus.');
        }

        DB::commit();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil di hapus.');
    }
}
