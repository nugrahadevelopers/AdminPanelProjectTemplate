let userTable;
userTable = $("#user-table").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: $("#user-table").attr("data-url"),
    columns: [
        {
            data: "DT_RowIndex",
            searchable: false,
            sortable: false,
        },
        {
            data: "name",
        },
        {
            data: "email",
        },
        {
            data: "role",
        },
        {
            data: "action",
            searchable: false,
            sortable: false,
        },
    ],
});

$("#userRoleSelect").select2({
    theme: "bootstrap-5",
    dropdownParent: $("#addNewUserModal"),
    placeholder: "Pilih Hak Akses",
    allowClear: true,
    ajax: {
        url: $("#userRoleSelect").attr("data-url"),
        type: "POST",
        dataType: "json",
        data: function (params) {
            return {
                _token: $('meta[name="csrf-token"]').attr("content"),
                search: params.term,
            };
        },
        processResults: function (data) {
            return {
                results: data,
            };
        },
    },
});

function handleUserEditBtnModal(id, roleId) {
    $(`#userEditRoleSelect-${id}`).select2({
        theme: "bootstrap-5",
        dropdownParent: $(`#userEditModal-${id}`),
        placeholder: "Pilih Hak Akses",
        allowClear: true,
        ajax: {
            url: $(`#userEditRoleSelect-${id}`).attr("data-url"),
            type: "POST",
            dataType: "json",
            data: function (params) {
                return {
                    _token: $('meta[name="csrf-token"]').attr("content"),
                    search: params.term,
                };
            },
            processResults: function (data) {
                return {
                    results: data,
                };
            },
        },
    });

    $(`#userEditRoleSelect-${id}`).val(roleId);
    $(`#userEditRoleSelect-${id}`).trigger("change");
}
