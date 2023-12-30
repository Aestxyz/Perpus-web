{{-- <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
        </tr>
    </tbody>
</table> --}}

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.bootstrap5.min.css">

    <style>
        table.dataTable thead tr,
        table.dataTable thead th,
        table.dataTable tbody th,
        table.dataTable tbody td {
            text-align: center;
            white-space: nowrap;
        }

        /* mode dark */
        .pagination .page-item.disabled .page-link {
            color: #fff;
            /* Set disabled link text color to white */
            background-color: #323349;
            /* Set disabled link background color to match paginate background */
        }

        .pagination .page-item .page-link:hover {
            color: #fff;
            /* Set link text color to white on hover */
            background-color: #6c757d;
            /* Set link background color on hover */
            border-color: #6c757d;
            /* Set link border color on hover */
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.6.0/js/dataTables.searchBuilder.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/searchbuilder/1.6.0/js/searchBuilder.bootstrap5.min.js"></script>
@endpush

@push('js')
    $('#example').DataTable({
    dom: 'QBfrtip',
    buttons: [
    'excel', {
    extend: 'print',
    orientation: 'landscape',
    pageSize: 'A4',
    {{-- messageBottom: '<div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: 1fr; grid-column-gap: 0px; grid-row-gap: 0px; height: 400px; padding-top:50px;"> <div></div> <div style=" grid-area: / 3;"> <p style="text-align: center;">Jambi, {{ Carbon\carbon::now()->format('d F Y') }}</p> <p style="text-align: center">Yang bertanda tangan dibawah ini:</p> <p style="text-align: center;padding-top:100px;">{{ Auth::user()->name }}</p> </div> </div>', --}}
    messageTop: '<p>Jambi, {{ Carbon\carbon::now()->format('d F Y') }}</p> <p>Dicetak oleh: {{ Auth::user()->name }}</p>',
    customize: function ( win ) {
    $(win.document.body).find( 'table' )
    .css( 'font-size', '8pt' )
    .prepend(
    '<img src="../image/logo.png" style="position:absolute; z-index:-40; top: 50%; left: 50%; transform: translate(-50%, -50%);" />'
    );
    }
    }
    ]
    });
@endpush
