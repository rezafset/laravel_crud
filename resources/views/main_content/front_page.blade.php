@extends('crud')

@section('main')
    <a href="{{ url('/add_student') }}" class=""><button type="button" class="btn btn-primary mb-3">Add Student</button></a>
    {{-- Success Message For Insert Data --}}
    @if (session('success'))
        <div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- Success Message for Update Data --}}
    @if (session('update'))
        <div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- Message for Delete Data --}}
    @if (session('delete'))
        <div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class='table-responsive'>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Department</th>
                    <th scope="col">CGPA</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $row)
                    <tr>
                        <th>{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->batch }}</td>
                        <td>{{ $row->department }}</td>
                        <td>{{ $row->cgpa }}</td>
                        <td>
                            <a href="{{ url('edit_student/'.$row->id) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <a href="{{ url('/student/delete/'.$row->id) }}"><button type="button" onclick=" return confirm('Are You sure to delete it??')"   class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
