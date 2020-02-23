@extends('layouts.fixed')
@section("title","All Doctors")

@section("content")

    <div class="col-12 pl-3 pt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">List of all Doctors</h3>
            </div>
            <div class="card-body">
                <div class="box">
                    <div class="box-header">


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table">
                            <tbody><tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Chamber</th>
                                <th>Visiting Hours</th>
                                <th>Weekdays</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i = $doctors->perPage() * ($doctors->currentPage() - 1);
                            @endphp

                            @foreach($doctors as $doctor)
                            <tr>
                                @php
                                    $i++
                                @endphp
                                <td>{{ $i }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->expertise }}</td>
                                <td>{{ $doctor->chamber }}</td>
                                <td>{{ $doctor->visiting_hours_start }} - {{ $doctor->visiting_hours_end }}</td>
                                <td>{{ $doctor->weekdays }}</td>
                                <td>
                                    @if(empty($doctor->image))
                                        <h6>No Image</h6>
                                    @else
                                        {{--                                    {{ asset('/images/'.$doctor->image) }}--}}
                                        <img class="img img-thumbnail" src="{{ asset('/images/'.$doctor->image) }}" alt="{{ asset('/images/'.$doctor->image) }}" width="300" height="225">
                                    @endif
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        <button id="editButton" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"
                                           data-id="{{ $doctor->id }}"
                                           data-name="{{ $doctor->name }}"
                                           data-b_name="{{ $doctor->b_name }}"
                                           data-qualifications="{{ $doctor->qualifications }}"
                                           data-b_qualifications="{{ $doctor->b_qualifications }}"
                                           data-designation="{{ $doctor->designation }}"
                                           data-b_designation="{{ $doctor->b_designation }}"
                                           data-expertise="{{ $doctor->expertise }}"
                                           data-b_expertise="{{ $doctor->b_expertise }}"
                                           data-chamber="{{ $doctor->chamber }}"
                                           data-b_chamber="{{ $doctor->b_chamber }}"
                                           data-other_chamber="{{ $doctor->other_chamber }}"
                                           data-b_other_chamber="{{ $doctor->b_other_chamber }}"
                                           data-address="{{ $doctor->address }}"
                                           data-b_address="{{ $doctor->b_address }}"
                                           data-phone="{{ $doctor->phone }}"
                                           data-fee="{{ $doctor->fee }}"
                                           data-weekdays="{{ $doctor->weekdays }}"
                                           data-visiting_hours_start="{{ $doctor->visiting_hours_start }}"
                                           data-visiting_hours_end="{{ $doctor->visiting_hours_end }}"
                                        >
                                            <i class="fa fa-eye"></i>&nbsp;/&nbsp;<i class="fa fa-edit"></i>
                                        </button>
                                        &nbsp;
                                        <form id="deleteForm" action="{{ route('doctor.delete',$doctor->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="Submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                                        </form>
{{--                                        <a href="#" class="btn btn-sm text-danger"><i class="fa fa-trash"></i></a>--}}
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <h5>Total Number Of Records: {{ $doctors->total() }}</h5>

                    </div>
                    <div class="col">
                        <div class="float-right">
                            {{ $doctors->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

{{--        // View modal--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Doctor Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('doctor.update') }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="b_name">Bangla Name</label>
                                <input type="text" class="form-control" name="b_name">
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input type="text" class="form-control" name="qualifications">
                            </div>

                            <div class="form-group">
                                <label for="b_qualification">Bangla Qualification</label>
                                <input type="text" class="form-control" name="b_qualifications">
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="designation">
                            </div>

                            <div class="form-group">
                                <label for="b_designation">Bangla Designation</label>
                                <input type="text" class="form-control" name="b_designation">
                            </div>

                            <div class="form-group">
                                <label for="expertise">Expertise</label>
                                <input type="text" class="form-control" name="expertise">
                            </div>

                            <div class="form-group">
                                <label for="b_expertise">Bangla Expertise</label>
                                <input type="text" class="form-control" name="b_expertise">
                            </div>
                            <div class="form-group">
                                <label for="chamber">Chamber</label>
                                <input type="text" class="form-control" name="chamber">
                            </div>
                            <div class="form-group">
                                <label for="b_chamber">Bangla Chamber</label>
                                <input type="text" class="form-control" name="b_chamber">
                            </div>

                            <div class="form-group">
                                <label for="other_chamber">Other Chamber</label>
                                <input type="text" class="form-control" name="other_chamber">
                            </div>
                            <div class="form-group">
                                <label for="b_other_chamber">Bangla Other Chamber</label>
                                <input type="text" class="form-control" name="b_other_chamber">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                <label for="b_address">Bangla Address</label>
                                <input type="text" class="form-control" name="b_address">
                            </div>
                            <div class="form-group">
                                <label for="address">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="text" class="form-control" name="fee">
                            </div>
                            <div class="form-group">
                                <label for="address">Weekdays</label>
                                <input type="text" class="form-control" name="weekdays">
                            </div>
                            <div class="form-group">
                                <label for="address">Visiting Hour Starts at</label>
                                <input type="text" class="form-control" name="visiting_hours_start">
                            </div>
                            <div class="form-group">
                                <label for="address">Visiting Hour Ends at</label>
                                <input type="text" class="form-control" name="visiting_hours_end">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <input type="number" hidden name="id">
                            <div class="row float-right">

                                <div class="col">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-outline-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
{{--        //view modal--}}
    </div>

@endsection
@section("script")
    <script>
        $(document).ready(function () {
            $(document).on("click","#editButton",function () {
                $('input[name=id]').val($(this).data('id'));
                $('input[name=name]').val($(this).data('name'));
                $('input[name=b_name]').val($(this).data('b_name'));
                $('input[name=qualifications]').val($(this).data('qualifications'));
                $('input[name=b_qualifications]').val($(this).data('b_qualifications'));
                $('input[name=designation]').val($(this).data('designation'));
                $('input[name=b_designation]').val($(this).data('b_designation'));
                $('input[name=expertise]').val($(this).data('expertise'));
                $('input[name=b_expertise]').val($(this).data('b_expertise'));
                $('input[name=chamber]').val($(this).data('chamber'));
                $('input[name=b_chamber]').val($(this).data('b_chamber'));
                $('input[name=other_chamber]').val($(this).data('other_chamber'));
                $('input[name=b_other_chamber]').val($(this).data('b_other_chamber'));
                $('input[name=address]').val($(this).data('address'));
                $('input[name=b_address]').val($(this).data('b_address'));
                $('input[name=phone]').val($(this).data('phone'));
                $('input[name=fee]').val($(this).data('fee'));
                $('input[name=weekdays]').val($(this).data('weekdays'));
                $('input[name=visiting_hours_start]').val($(this).data('visiting_hours_start'));
                $('input[name=visiting_hours_end]').val($(this).data('visiting_hours_end'));
            });


          $(document).on("submit","#deleteForm",function () {
            return confirm("Are You Sure?")
          })
        })
    </script>
@endsection
