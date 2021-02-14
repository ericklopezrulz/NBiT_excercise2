@extends('branches.baseLayout')

<header>
    <title>Edit Branch</title>
</header>
@section('content')
<form method="POST" action="/update/{{$branches[0]->id}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="">Branch ID</label>
            <input type="text" class="form-control" id="" value="{{$branches[0]->id}}" disabled readonly>
        </div>
        <div class="form-group col-md-12">
            <label for="">Bank Name</label>
            <input type="text" class="form-control" id="" value="{{$branches[0]->bank_name}}" disabled readonly>
        </div>
        <div class="form-group col-md-12">
            <label for="branch_name">Branch Name</label>
            <input type="text" class="form-control" name="branch_name" id="branch_name"
                value="{{$branches[0]->branch_name}}">
        </div>
        <div class="form-group col-md-12">
            <label for="branch_code">Branch Code</label>
            <input type="text" class="form-control" name="branch_code" id="branch_code"
                value="{{$branches[0]->branch_code}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
