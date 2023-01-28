<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <style>
        .dataTables_length,
            .dataTables_wrapper {
            font-size: 1.6rem;
            select,
            input {
                background-color: #f9f9f9;
                border: 1px solid #999;
                border-radius: 4px;
                height: 3rem;
                line-height: 2;
                font-size: 1.8rem;
                color: #333;
            }

            .dataTables_length,
            .dataTables_filter {
                margin-top: 30px;
                margin-right: 20px;
                margin-bottom: 10px;
                display: inline-flex;
            }
            }

            // paginate

            .paginate_button {
            min-width: 4rem;
            display: inline-block;
            text-align: center;
            padding: 1rem 1.6rem;
            margin-top: -1rem;
            border: 2px solid lightblue;
            &:not(.previous) {
                border-left: none;
            }
            &.previous {
                border-radius: 8px 0 0 8px;
                min-width: 7rem;
            }
            &.next {
                border-radius: 0 8px 8px 0;
                min-width: 7rem;
            }

            &:hover {
                cursor: pointer;
                background-color: #eee;
                text-decoration: none;
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>
    </head>
    <body translate="no">
        @yield('content')
    </body>
</html>