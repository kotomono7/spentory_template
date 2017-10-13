$(function () {
    $('.js-basic-example').DataTable({
        // destroy: true, // prevents from error can't reinitiating datatables
        responsive: true,
        language: {
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            emptyTable: "Tidak ada data!",
            zeroRecords: "Tidak ada data!",
            info: "Menampilkan <strong>_START_-_END_</strong> data dari total <strong>_TOTAL_</strong> data",
            // info: "Menampilkan halaman ke-_PAGE_ dari _PAGES_ total halaman",
            infoEmpty: "Tidak ada data yang tersedia!",
            search: "Pencarian:",
            loadingRecords: "Memuat data...",
            processing: "Memproses data...",
            paginationType: "full_numbers",
            paginate: {
                first: "Awal",
                previous: "<i class='material-icons'>arrow_back</i>",
                next: "<i class='material-icons'>arrow_forward</i>",
                last: "Akhir"
            },
            decimal: ".",
            thousands: ","
        }
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});

// DataTables strings
/*{
    "emptyTable":       "No data available in table",
    "info":             "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty":        "Showing 0 to 0 of 0 entries",
    "infoFiltered":     "(filtered from _MAX_ total entries)",
    "infoPostFix":      "",
    "lengthMenu":       "Show _MENU_ entries",
    "loadingRecords":   "Loading...",
    "processing":       "Processing...",
    "search":           "Search:",
    "zeroRecords":      "No matching records found",
    "paginate": {
        "first":        "First",
        "previous":     "Previous",
        "next":         "Next",
        "last":         "Last"
    },
    "aria": {
        "sortAscending":    ": activate to sort column ascending",
        "sortDescending":   ": activate to sort column descending"
    },
    "decimal":          "",
    "thousands":        ","
}*/