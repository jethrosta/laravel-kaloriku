@extends('layouts.admin')
@section('content')

 <div class="content-wrapper">
        <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Food /</span> Food Menu</h4>

            <!--table-->
       <div class="card mb-4" style="padding: 40px">
           <form>
               <div class="form-section" id="section1">
               <div class="row mb-3">
                   <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" id="basic-default-name" value="{{$foods->Food_Name}}" />
                   </div>
               </div>
               <div class="row mb-3">
                   <label class="col-sm-2 col-form-label" for="basic-default-company">Calories</label>
                   <div class="col-sm-10">
                       <input
                           type="text"
                           class="form-control"
                           id="basic-default-company"
                          value="{{$foods->calories}}"
                       />
                   </div>
               </div>
               <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Serving Size</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->servings_per_container}}" />
                       </div>
                   </div>
               <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Total Fat</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->total_fat}}" />
                       </div>
                   </div>
               <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Total Carbs</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->total_fat}}" />
                       </div>
                   </div>
               <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Protein</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->protein}}" />
                       </div>
                   </div>
                   <button class="btn btn-primary" id="next1">Next</button>
               </div>
               <div class="form-section" id="section2" style="display:none;">
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Saturated</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->saturated}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Polyunsaturated</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->polyunsaturated}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Monounsaturated</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->monounsaturated}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Trans</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->trans}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Cholesterol</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->cholesterol}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Sodium</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->sodium}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Potassium</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->potassium}}" />
                       </div>
                   </div>
                     <button id="back1" class="btn btn-primary">back</button>
                   <button class="btn btn-primary" id="next2">Next</button>
               </div>
               <div class="form-section" id="section3" style="display:none;">
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Dietary Fiber</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->dietary_fiber}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Sugars</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->sugars}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Vitamin A</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->vitamin_a}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">vitamin_c</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->vitamin_c}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Calcium</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->calcium}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Sodium</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->sodium}}" />
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="basic-default-name">Iron</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" value="{{$foods->iron}}" />
                       </div>
                   </div>
                   <button id="back2" class="btn btn-primary">back</button>
                   <button type="submit" class="btn btn-primary">Save</button>
               </div>
           </form>
       </div>
   </div>
 </div>


@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            let currentPage = new URLSearchParams(window.location.search).get("page");
            if(!currentPage) currentPage = 1;
            if(currentPage == 1){
                $('#section1').show();
                $('#section2').hide();
                $('#section3').hide();
            }
            if(currentPage == 2){
                $('#section1').hide();
                $('#section2').show();
                $('#section3').hide();
            }
            if(currentPage == 3){
                $('#section1').hide();
                $('#section2').hide();
                $('#section3').show();
            }
            $('#next1').click(function(event) {
                event.preventDefault();

                $('#section1').hide();
                $('#section2').show();
                $('#section3').hide();

                history.pushState(null, null, "?page=2");
            });
            $('#next2').click(function(event) {
                event.preventDefault();

                $('#section1').hide();
                $('#section2').hide();
                $('#section3').show();

                history.pushState(null, null, "?page=3");
            });
            $('#back1').click(function(event) {
                event.preventDefault();
                $('#section1').show();
                $('#section2').hide();
                $('#section3').hide();

                history.pushState(null, null, "?page=1");
            });
            $('#back2').click(function(event) {
                event.preventDefault();
                $('#section1').hide();
                $('#section2').show();
                $('#section3').hide();

                history.pushState(null, null, "?page=2");
            });
        });
    </script>
@endpush
