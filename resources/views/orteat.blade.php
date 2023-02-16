<table>
    <thead>
        <tr>
            <th>Ort</th>
            <th>Ort URL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->ort }}</td>
            <td>{{ $item->ort_url }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
