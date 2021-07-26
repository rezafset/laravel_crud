@extends('crud')

@section('main')

<div class="col-md-8 m-auto">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="mb-0">Edit Student</h3>
            <a href="{{ url('/') }}"><button type="button" class="btn btn-dark">Back</button></a>
        </div>
        <div class="card-body">
            <form action="{{ url('/student/update/'.$student->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $student->name }}" class="form-control @error('name') is-invalid @enderror" id="name">
                    @error('name')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" name="batch" value="{{ $student->batch }}" class="form-control @error('batch') is-invalid @enderror" id="batch">
                    @error('batch')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" value="{{ $student->department }}" class="form-control @error('department') is-invalid @enderror" id="department">
                    @error('department')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="cgpa" class="form-label">CGPA</label>
                    <input type="text" name="cgpa" value="{{ $student->cgpa }}" class="form-control @error('cgpa') is-invalid @enderror" id="cgpa">
                    @error('cgpa')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
