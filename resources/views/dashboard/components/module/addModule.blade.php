@extends('layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>


        <!-- HTML5 Inputs -->
        <div class="card mb-4">
            <h5 class="card-header">HTML5 Inputs</h5>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label ">Nom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">H-Globale</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="defaultSelect" class="col-md-2 col-form-label">Classe</label>
                    <div class="col-md-10">
                        <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1">L1</option>
                            <option value="2">L2</option>
                            <option value="3">L3</option>
                            <option value="4">M1</option>
                            <option value="5">M2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Type</label>

                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" checked />
                        <label class="form-check-label" for="inlineRadio1">Matière de base</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" />
                        <label class="form-check-label" for="inlineRadio2">Complementaire</label>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Tarif</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id=""
                            placeholder="Readonly input here..." readonly />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="defaultSelect" class="col-md-2 col-form-label">Prof</label>
                    <div class="col-md-10">
                        <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                            <option value="5"></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>

    </div>
@endsection
