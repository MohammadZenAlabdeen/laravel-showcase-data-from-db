<!DOCTYPE html> 
<html> 
<head> 
    <title>Muhammad zen alabdeen task 01 laravel</title> 
</head> 
<body> 
    <table>
        <tr>
            <th>id</th>
            <th>odd or even</th>
            <th>title</th>
            <th>description</th>
        </tr>

    @foreach($var as $v)
@if ($v -> id%2!=0)
<tr>
    <td>{{ $v -> id}}</td>
    <td>odd</td>
    <td>{{ $v -> title}}</td>
    <td>{{$v -> description}}</td>
</tr>
@else
<td>{{ $v -> id}}</td>
<td>even</td>
<td>{{ $v -> title}}</td>
<td>{{$v -> description}}</td>
@endif
        

    @endforeach

    </table>
</body> 
</html> 