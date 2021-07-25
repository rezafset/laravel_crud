@extends('crud')

@section('main')
    <a href="{{ url('/add_student') }}" class=""><button type="button" class="btn btn-primary mb-3">Add Student</button></a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href=""><button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <a href=""><button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
