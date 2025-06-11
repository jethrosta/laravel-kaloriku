@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <label for="saturated">Saturated </label>
        <input wire:model="saturated" type="number">
    </div>

    <div class="col-md-4">
        <label for="polyunsaturated	">Polyunsaturated</label>
        <input wire:model="polyunsaturated" type="number">
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <label for="monounsaturated">Monounsaturated </label>
        <input wire:model="monounsaturated" type="number">
    </div>

    <div class="col-md-4">
        <label for="trans">Trans</label>
        <input wire:model="trans" type="number">
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="cholesterol" class="position-absolute top-25" style="top: 10px">Cholesterol </label>
            </div>
            <div class="col-5">

                <input wire:model="cholesterol" type="number">
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="sugars" class="position-absolute top-25" style="top: 10px">Sugars</label>
            </div>
            <div class="col-5">
                <input wire:model="sugars" type="number">
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="sodium"  class="position-absolute top-25" style="top: 10px">Sodium </label>
            </div>
            <div class="col-5">
                <input wire:model="sodium" type="number">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="potassium" class="position-absolute top-25" style="top: 10px">Potassium</label>
            </div>
            <div class="col-5">
                <input wire:model="potassium" type="number">
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="dietary_fiber"  class="position-absolute top-25" style="">Dietary Fiber </label>
            </div>
            <div class="col-5">
                <input wire:model="dietary_fiber" type="number">
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="vitamin_a"  class="position-absolute top-25" style="top: 10px">Vitamin A </label>
            </div>
            <div class="col-5">
                <input wire:model="vitamin_a" type="number">
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="vitamin_c" class="position-absolute top-25" style="top: 10px">Vitamin C</label>
            </div>
            <div class="col-5">
                <input wire:model="vitamin_c" type="number">
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center justify-content-sm-between" style="margin: 40px 500px">
    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="calcium">Calcium</label>
            </div>
            <div class="col-md-5">
                <input wire:model="calcium" type="number">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="row justify-content-md-between">
            <div class="col-5 position-relative bottom-50">
                <label for="iron">Iron</label>
            </div>
            <div class="col-md-5">
                <input wire:model="iron" type="number">
            </div>

        </div>
    </div>
</div>
        <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
            {{trans('Add_food.Back')}}
        </button>

        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                wire:click="secondStepSubmit">{{trans('Add_food.Next')}}</button>
    </div>
