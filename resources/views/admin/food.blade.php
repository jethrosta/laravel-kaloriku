@extends('layouts.admin')
@section('content')

 <div class="content-wrapper">
        <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Food /</span> Food Menu</h4>

            <!--table-->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Food Name</th>
                    <th>Calories</th>
                    <th>For Member</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($foods as $key=>$food)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$food->Food_Name}}</strong></td>
                    <td>{{$food->calories}}</td>
                    <td><span class="badge bg-label-{{$food->for_member == 1 ? 'primary' : 'danger'}} me-1">{{$food->status}}</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuIconButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton4">
                                <a class="dropdown-item" href="{{route('admin.food.details', $food->id)}}"
                                ><i class="bx bx-show-alt me-1"></i> Show</a
                                >

                                <a class="dropdown-item" href="{{route('admin.food.edit', $food->id)}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >

                                <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                {!! $foods->links() !!}
                </tbody>
            </table>

        </div>
    </div>
   </div>
 </div>


@endsection
