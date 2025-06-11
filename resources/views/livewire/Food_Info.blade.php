@if($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <label for="food-name">Food Name (en)<span class="text-danger fs-5">*</span></label>
        <input wire:model="food_name" type="text">
        @error('food_name')
        <div class="alert alert-pink m-3">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-5">
        <label for="food_name_ar">Food Name (ar)</label>
        <input wire:model="food_name_ar" type="text">

    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <label for="serving-size">Serving Size <span class="text-danger fs-5">*</span></label>
        <input wire:model="serving_size" type="text" placeholder="Ex: 200gm">
        @error('serving_size')
        <div class="alert alert-pink m-3">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-5">
        <label for="servings-per-container">Servings per container <span class="text-danger fs-5">*</span></label>
        <input wire:model="servings_per_container" type="text" placeholder="Ex: 2">
        @error('servings_per_container')
        <div class="alert alert-pink m-3">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <label for="calories">Calories <span class="text-danger fs-5">*</span> </label>
        <input wire:model="calories" type="number">
        @error('calories')
        <div class="alert alert-pink m-3">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="fat">Fat <span class="text-danger fs-5">*</span></label>
        <input wire:model="fat" type="number">
        @error('fat')
        <div class="alert alert-pink m-3">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="carbs">Carbs <span class="text-danger fs-5">*</span> </label>
            </div>
            <div class="col-5">
                <input wire:model="carbs" type="number">
            </div>
            @error('carbs')
            <div class="alert alert-pink m-3">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-6 position-relative bottom-50">
        <label for="Protein	">Protein <span class="text-danger fs-5">*</span></label>
            </div>
            <div class="col-5">
        <input wire:model="protein" type="number">
    </div>
            @error('protein')
            <div class="alert alert-pink m-3">{{ $message }}</div>
            @enderror
</div>
    </div>
</div>
        <button class="btn btn- btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button" style="background: #df1860; color: white">{{trans('Add_food.Next')}}
        </button>

    </div>
        </div>
    </div>
