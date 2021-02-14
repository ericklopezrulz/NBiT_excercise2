@extends('branches.baseLayout')

<header>
    <title>Branch List</title>
</header>
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Branch ID</th>
            <th scope="col">Bank Name</th>
            <th scope="col">Branch Name</th>
            <th scope="col">Branch Code</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($branches as $b)
        <tr>
            <th scope="row">{{ $b->id }}</th>
            <td>{{$b->bank_name }}</td>
            <td>{{ $b->branch_name }}</td>
            <td>{{ $b->branch_code }}</td>
            <td><a href="/edit/{{ $b->id }}" type="button" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
