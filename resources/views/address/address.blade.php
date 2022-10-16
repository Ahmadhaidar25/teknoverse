@extends('layout.main')
@section('content')
<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">

    </div>
    <!-- DataTable with Hover -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Master Our Address</h6>
                <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                    Add
                </button>-->
            </div>

            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $no=1; @endphp
                        @foreach($data as $x)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$x->address}}</td>
                            <td><a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-{{$x->id}}">Edit</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-{{$x->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="{{url('/update/our/address/'.$x->id)}}" method="post">
                <div class="modal-body">
                    @csrf
                    <textarea class="form-control" name="address">{{$x->address}}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
                        <div class="hide-text">Update</div>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection