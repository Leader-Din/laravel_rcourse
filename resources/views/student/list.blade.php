<h1>List Student</h1>
<table>
    <thead>
        <tr>
            <th>N</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $index => $student)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $student->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
