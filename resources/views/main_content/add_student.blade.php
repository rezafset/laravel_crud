@extends('crud')
@section('main')

<div class="col-md-8 m-auto">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="mb-0">Add Student</h3>
            <a href="{{ url('/') }}"><button type="button" class="btn btn-dark">Back</button></a>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" name="batch" class="form-control" id="batch">
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" id="department">
                </div>
                <div class="mb-3">
                    <label for="cgpa" class="form-label">CGPA</label>
                    <input type="text" name="cgpa" class="form-control" id="cgpa">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

@endsection
