<tr>
    <td scope="row"> {{ $code }}</td>
    <td> {{ $name }}</td>
    <td>{{ $section }}</td>
    <td>{{ $lecturer }}</td>
    <td>{{ $day }}</td>
    <td>{{ $time }}</td>
    <td>{{ $credit_hours }}</td>
    <td>
        <input name="courses[]" type="checkbox" value="{{ $code }}"></input>
    </td>
</tr>