@extends('layouts.admin')
@section('content')
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Basic Layout</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                        <select name="exercise_categories" id="categories">
                            <option value="" disabled selected>Select exercises' category</option>
                            @foreach($categories as $category)
                            <option value="{{$category -> id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="col-md-6">
                        <select class="select2" id="exercise_types" name="exercise_types[]" multiple>
                            <option value="" disabled selected>Select exercises' types</option>
                        </select>
                    </div>
            </div>
            <div class="col-md-12 my-3">
                <button class="btn btn-primary" id="get-exercises">Get Exercises</button>
            </div>

            <div class="col-md-12 my-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Exercise Name</th>
                        <th>Slug</th>
                        <th>counter</th>
                        <th>Image</th>
                        <th>MET</th>
                        <th>Settings</th>
                    </tr>
                    </thead>
                    <tbody id="all-exercises" class="table-border-bottom-0">
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuIconButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton4">
                                <a class="dropdown-item" href="#"
                                ><i class="bx bx-show-alt me-1"></i> Show</a
                                >

                                <a class="dropdown-item" href="#"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >

                                <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                    </tbody>
                </table>
            </div>
            </div>

        </div>
    </div>
</div>
@stop
@push('scripts')
    <script>
        $(document).ready(function (){
            $('#categories').on('change', function () {
                var categoryId = $(this).val()
                $.ajax({
                    url: '/admin/exercise-types/' + categoryId,
                    success: function (data) {
                        var exerciseTypes = data.exerciseTypes;
                        for (var i = 0; i < exerciseTypes.length; i++) {
                            $('#exercise_types').append('<option value="' + exerciseTypes[i].id + '">' + exerciseTypes[i].name + '</option>');
                        }
                    }
                })
            })
            $('#get-exercises').on('click', function () {
                var exerciseTypeIds = $('#exercise_types').val();
                if ($.inArray('all', exerciseTypeIds) !== -1) {
                    // Select all options if "Select All" is selected
                    $('#exercise_types option').prop('selected', true);
                    exerciseTypeIds = $('#exercise_types').val();
                }

                $.ajax({
                    url: '/admin/all-exercise/' + exerciseTypeIds.join(','),
                    success: function (data) {
                        var exercises = data.exercises;
                      for (var i = 0; i < exercises.length; i++) {
                          $('#all-exercises').append(
                              '<tr>'+
                              '<td>'+exercises[i].name+'</td>' +
                              '<td>'+exercises[i].slug+'</td>'+
                              '<td>'+exercises[i].counter+'</td>'+
                              '<td><img src="' + exercises[i].image + '"></td>' +
                              '<td>'+exercises[i].MET +'</td>'+
                              '</tr>'
                          )

                      }
                    }
                })
            })
        })
    </script>
@endpush
