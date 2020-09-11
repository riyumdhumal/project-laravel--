<html>
    <head>
    <title>
    </title>

    <style>
    td{
        align:center;
    }
    </style>
    </head>

    <body>
    <table border="1" >
    <tr>
        <th>Title</th>
        <th>Details</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $d)
    <tr>

        <td>{{ $d->title }}</td>
        <td>{{ $d->details }}</td>
        <td>{{ $d->date }}</td>
        <td><a href="edit/{{ $d->id }}">Edit</a></td>
        <td><a href="delete/{{ $d->id }}">Delete</a></td>
    </tr>
    @endforeach
    </table>

    </body>
</html>