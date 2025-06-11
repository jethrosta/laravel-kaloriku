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
                    <th>Nutrition</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <tr>
                    <th>user</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->user->name}}</strong></td>
                </tr>

                <tr>
                    <th>Food Name</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->Food_Name}}</strong></td>
                </tr>
                <tr>
                    <th>Calories</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->calories}} Cal</strong></td>
                </tr>
                <tr>
                    <th>Serving Size</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->serving_size}} gram</strong></td>
                </tr>
                <tr>
                    <th>Serving Size</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->servings_per_container}} gram</strong></td>
                </tr>
                <tr>
                    <th>Total Fat</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->total_fat}} gram</strong></td>
                </tr>
                <tr>
                    <th>Total Carbs</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->total_carbs}} gram</strong></td>
                </tr>
                <tr>
                    <th>Protein</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->protein}} gram</strong></td>
                </tr>
                <tr>
                    <th>Saturated</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->saturated ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>Polyunsaturated</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->polyunsaturated ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>monounsaturated</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->monounsaturated ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>trans</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->trans ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>cholesterol</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->cholesterol ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>sodium</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->sodium ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>potassium</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->potassium ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>dietary_fiber</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->dietary_fiber ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>sugars</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->sugars ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>vitamin_a</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->vitamin_a ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>vitamin_c</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->vitamin_c ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>calcium</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->calcium ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>iron</th>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$foods->iron ?? '-'}}</strong></td>
                </tr>
                <tr>
                    <th>Accept</th>
                    <td>
                    <span class="badge bg-label-{{$foods->add_food == 1 ? 'primary' : 'warning'}} me-1">{{$foods->accept}}</span>
                    </td>
                </tr>
                <tr>
                    <th>For Member</th>
                    <td>
                        <span class="badge bg-label-{{$foods->for_member == 1 ? 'primary' : 'danger'}} me-1">{{$foods->status}}</span>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
   </div>
 </div>


@endsection
