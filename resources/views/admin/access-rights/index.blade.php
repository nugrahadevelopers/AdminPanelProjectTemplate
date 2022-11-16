<x-app-layout pageTitle="Hak Akses" breadcrumbsName="access-rights">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <table id="access-right-table" data-url="{{ route('admin.access-rights.index') }}"
                    class="table table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-nowrap">Nama Role</th>
                            <th class="text-nowrap">Hak Akses</th>
                            <th class="text-nowrap">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addNewUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.users.index') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buat Pengguna Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">{{ trans('register.name') }}</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('register.email_address') }}</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('register.password') }}</label>
                                <div class="input-group input-group-flat">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" autocomplete="off">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ trans('register.confirm_password') }}</label>
                                <div class="input-group input-group-flat">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="off">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Hak Akses</label>
                                <select id="userRoleSelect" name="role_id" data-url="{{ route('admin.roles.list') }}"
                                    class="form-select @error('role_id') is-invalid @enderror">
                                </select>
                                @error('role_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('js-internal')
        <script src="{{ asset('dist/js/access-right/index.js') }}"></script>
    @endpush
</x-app-layout>
