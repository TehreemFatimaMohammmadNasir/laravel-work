<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            border: 2px solid brown
        }

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
            border: 2px solid brown
        }

        h1 {
            text-align: center;
            color: rgb(10, 87, 10);
            text-decoration: underline;
        }
        h2 {
            text-align: center;
        }


        .grade {
            font-weight: bold;
            color: rgb(2, 0, 128);
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Marksheet</h1>
    <h2>Name:{{ $name }}</h2>

    <table>
        
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>English</td>
            <td>{{ $english }}</td>
        </tr>
        <tr>
            <td>Urdu</td>
            <td>{{ $urdu }}</td>
        </tr>
        <tr>
            <td>Islamiyat</td>
            <td>{{ $islamiyat }}</td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td>{{ $mathematics }}</td>
        </tr>
        <tr>
            <td>Chemistry</td>
            <td>{{ $chemistry }}</td>
        </tr>
        <tr>
            <td>Computer</td>
            <td>{{ $computer }}</td>
        </tr>
        <tr>
            <td>Physics</td>
            <td>{{ $physics }}</td>
        </tr>
        @php
        $obtained = $english + $urdu + $islamiyat + $mathematics +$chemistry + $computer + $physics;
        $per = ($obtained / 500) * 100;
    @endphp

        <tr>
            <th>Total Obtained Marks</th>
            <th>{{ $obtained }}</th>
        </tr>
        <tr>
            <th>Percentage</th>
            <th>{{ $per }}%</th>
        </tr>
    </table>

    <h1>
        @if ($per <= 100 && $per >= 80)
            <span class="grade">Grade A1</span>
        @elseif ($per <= 79 && $per >= 70)
            <span class="grade">Grade A</span>
        @elseif ($per <= 69 && $per >= 60)
            <span class="grade">Grade B</span>
        @elseif ($per <= 59 && $per >= 50)
            <span class="grade">Grade C</span>
        @elseif ($per <= 49 && $per >= 40)
            <span class="grade">Grade D</span>
        @else
            <span class="fail">You are not eligible for admission</span>
        @endif
    </h1>

</body>

</html>
