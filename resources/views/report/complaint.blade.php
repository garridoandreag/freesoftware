<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Queja</title>
    <style>
        form {
            /* Just to center the form on the page */
            margin: 0 auto;
            width: 600px;
            /* To see the outline of the form */
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        form li+li {
            margin-top: 1em;
        }

        label {
            /* To make sure that all labels have the same size and are properly aligned */
            display: inline-block;
            font: 1em sans-serif;
            width: 180px;
            text-align: right;
        }

        input,
        textarea {
            /* To make sure that all text fields have the same font settings By default, textareas have a monospace font */
            font: 1em sans-serif;
            /* To give the same size to all text fields */
            width: 300px;
            box-sizing: border-box;
            /* To harmonize the look & feel of text field border */
            padding: 6px 5px;
            margin: 4px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus,
        textarea:focus {
            /* To give a little highlight on active elements */
            border-color: #000;
        }

        div.gallery {
            margin: 5px;
            width: 180px;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }


    </style>
</head>

<body>
    <form action="/my-handling-form-page" method="post">
        <ul>
            <li style="background-color: #1e3c72;">
                <div class="gallery">
                    @include('includes.logo')
                </div>
            </li>
            <li>
                <label for="code">Código:</label>
                <input type="text" id="code" name="code" value="{{ $complaint->code }}">
            </li>
            <li>
                <label for="vendor">Proveedor:</label>
                <input type="text" id="vendor" name="vendor" value="{{ $complaint->vendor->name }}">
            </li>
            <li>
                <label for="department">Departamento:</label>
                <input type="text" id="department" name="department" value="{{ $complaint->department->name }}">
            </li>
            <li>
                <label for="town">Municipio:</label>
                <input type="text" id="town" name="town" value="{{ $complaint->town->name }}">
            </li>
            <li>
                <label for="address">Direccion:</label>
                <input type="text" id="address" name="address" value="{{ $complaint->branchoffice->address }}">
            </li>
            <li>
                <label for="summary">Título:</label>
                <input type="text" id="summary" name="summary" value="{{ $complaint->summary }}">
            </li>
            <li>
                <label for="description">Descripción:</label>
                <input type="text" id="description" name="description" value="{{ $complaint->description }}">
            </li>
            <li>
                @if ($complaint->status == 0)
                    <label for="status">Estado:</label>
                    <input type="text" id="status" name="status" value="INACTIVO">
                @endif
                @if ($complaint->status == 1)
                    <label for="status">Estado:</label>
                    <input type="text" id="status" name="status" value="ACTIVO">
                @endif
                @if ($complaint->status == 2)
                    <label for="status">Estado:</label>
                    <input type="text" id="status" name="status" value="REVISADO">
                @endif
            </li>
        </ul>
    </form>
</body>

</html>
