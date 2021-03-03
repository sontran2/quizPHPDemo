@extends('layouts.app')
@section('content')
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Add QUIZ Question</h1>
        </div>
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-10 col-md-10 col-lg-10 col-xl-10">
                <form action="">
                    @csrf
                    <div class="row">
                    <div class="col-sm-6">
                        <h3>Question General</h3>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Title</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Question type</label>
                            <select class="form-control col-md-8 col-sm-8">
                                <option>Select One</option>
                                <option>Select Multi</option>
                            </select>
                        </div>
                        <h3>Question Options</h3>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Option 1</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Option 2</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Option 3</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Option 4</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-sm-4" for="">Option 5</label>
                            <input type="text" class="form-control col-md-8 col-sm-8">
                        </div>
                        <div class="form-group row">
                            <input type="button" id="addOption"  value="Add question option" class="form-control btn btn-primary">
                        </div>
                    </div>
                    <div class="col-sm-6">

                    <h3>Question Answers</h3>
                        <div class="form-group">
                        <label class="" for="">Answers</label>
                        <div class="form-group text-center">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                        </div>
                        </div>
                    <div class="form-group">
                        <label class="" for="">Correct</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>


                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col"><button class="col-6 btn btn-secondary btn-sm float-left">Reset</button></div>
                                <div class="col"><button class="col-6 btn btn-primary btn-sm float-right">Submit</button></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $( document ).ready(function(){
        alert(1);
    })

</script>
@endpush
