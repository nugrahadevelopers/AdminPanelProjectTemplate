let roleTable;
roleTable = $("#role-table").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: $("#role-table").attr("data-url"),
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
            data: "action",
            searchable: false,
            sortable: false,
        },
    ],
});
