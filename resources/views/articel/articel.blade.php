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
                <h6 class="m-0 font-weight-bold text-primary">Master Articel</h6>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                    Add
                </button>
            </div>

            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $x)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$x->title}}</td>
                            <td>{!! $x->description !!}</td>
                            <td>
                                @if($x->image==null)
                                @else
                                <img src="{{url('file_articel/'.$x->image)}}" class="rounded float-start" alt="image" style="width: 200px;">
                                @endif
                            </td>
                            <td>
                               <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{url('/edit/articel/'.$x->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('/delete/articel/'.$x->id)}}" class="btn btn-danger btn2">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!--modal add-->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Articel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form" action="{{url('/add/articel/')}}" method="post" enctype="multipart/form-data" id="kotak">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">No</label>
                        <input type="text" class="form-control" name="no" value="{{$kodeBaru}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="article"></textarea>
                    </div>

                    <div class="input-group">
                      <input type="file" class="form-control" name="image" id="upload">
                      <button class="btn btn-outline-secondary" type="button">Button</button>

                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                   <div class="spinner">
                    <i role="status" class="spinner-border spinner-border-sm"></i></div>
                    <div class="hide-text">Save</div>
                </button>
            </div>

        </form>
    </div>
</div>
</div>
@endsection