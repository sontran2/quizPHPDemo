@extends('layouts.app')
@section('content')
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Form</h1>
        </div>
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <form action="">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 2
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" disabled>Option 3
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col"><button class="col-6 btn btn-secondary btn-sm float-left">Reset</button></div>
                                <div class="col"><button class="col-6 btn btn-primary btn-sm float-right">Submit</button></div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
