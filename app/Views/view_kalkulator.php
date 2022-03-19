<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <title>Kalkulator Sederhana</title>

    <style>
        .container {
            text-align: center;
        }

        .Identitas {
            width: 100%;
            height: fit-content;
            margin: auto;
            display: flex;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top :50px">
        <div class="Identitas">
            <table style="width: 50%">
                <tr>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Kelas</th>
                </tr>
                <tr>
                    <td>Rizky Adi Ryanto</td>
                    <td>19.01.013.044</td>
                    <td>Pemograman Framework B</td>
                </tr>
            </table>
        </div>
        <form method="post" action="/Kalkulator/hasil">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        </form>
    </div>
</body>

</html>