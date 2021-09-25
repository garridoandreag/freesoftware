<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Quejas</title>
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            align-content: center;
        }

        .table table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 14px;
            margin: 35px;
            text-align: center;
            border-collapse: collapse;

            height: 100px;

        }

        .table th {
            font-size: 12px;
            font-weight: bold;
            padding: 8px;
            background: #74A0FD;
            border-top: 4px solid #74A0FD;
            border-bottom: 1px solid #fff;
            color: black;
        }

        .table td {
            padding: 4px;
            font-size: 11px;
            background: #e8edff;
            border-bottom: 1px solid #fff;
            color: black;
            border-top: 1px solid transparent;
        }

        tr:hover td {
            background: #d0dafd;
            color: #339;
        }

        img.mediana {
            height: 50px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        form li+li {
            margin-top: 1em;
        }

        .box {
            width: 100%;
            font-size: 13px;
            padding: 10px;
            border: 1px solid #000;
            margin: 0;
        }

    </style>
</head>

<body>

    <ul>
        <li style="background-color: #1e3c72;">
            <img src="{{ route('directorate.logo', ['filename' => App\Models\Directorate::find(1)->logo]) }}"
                class="mediana" />
        </li>
        <li style="vertical-align:text-top; text-align:left;">
            <h2>Reporte: Quejas del {{ $startDate }} al {{ $endDate }}</h2>
            <h6>{{ $now }}</h6>
        </li>
    </ul>


    <hr>
    <div class="contenido">
        <table class="table table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Norte</th>
                    <th scope="col">Sur</th>
                    <th scope="col">Centro</th>
                    <th scope="col">Oriente</th>
                    <th scope="col">Occidente</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($complaints as $complaint)
                    <tr>
                        <td data-label="Proveedor" scope="row">
                            {{ $complaint->branchoffice }}
                        </td>
                        <td data-label="Norte" scope="row">
                            @if($complaint->region == "Norte")
                            {{ $complaint->quantity}}
                            @else
                            0
                            @endif
                        </td>
                        <td data-label="Sur" scope="row">
                            @if($complaint->region == "Sur")
                            {{ $complaint->quantity}}
                            @else
                            0
                            @endif
                        </td>
                        <td data-label="Centro" scope="row">
                            @if($complaint->region == "Centro")
                            {{ $complaint->quantity}}
                            @else
                            0
                            @endif
                        </td>
                        <td data-label="Oriente" scope="row">
                            @if($complaint->region == "Oriente")
                            {{ $complaint->quantity}}
                            @else
                            0
                            @endif
                        </td>
                        <td data-label="Occidente" scope="row">
                            @if($complaint->region == "Occidente")
                            {{ $complaint->quantity}}
                            @else
                            0
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</body>

</html>
