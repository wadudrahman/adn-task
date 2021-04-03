@extends('layouts.app')

@section('title', 'Create Campaign')

@section('parent', 'Home')

@push('after_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/date-picker.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('partials.alerts')
            <div class="col-sm-12">
                <div class="card">
                    <form class="theme-form" method="post" action="{{ route('campaign.create.post') }}">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="title">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="title" name="title"
                                           placeholder="Name of Campaign">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="start_form">Live At</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="text"
                                               id="start_form" name="start_form" data-language="en">
                                    </div>
                                </div>
                                <label class="col-sm-3 col-form-label" for="end_at">Terminate At</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="text"
                                               id="end_at" name="end_at" data-language="en">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="daily_budget">Daily Budget</label>
                                <div class="col-sm-3 input-group mb-3">
                                    <span class="input-group-text">$  </span>
                                    <input class="form-control" type="text" id="daily_budget" name="daily_budget">
                                </div>
                                <label class="col-sm-3 col-form-label" for="total_budget">Total Budget</label>
                                <div class="col-sm-3 input-group mb-3">
                                    <span class="input-group-text">$  </span>
                                    <input class="form-control" type="text" id="total_budget" name="total_budget">
                                </div>
                            </div>
                            <div class="mb-3 row text-center">
                                <div class="col-sm-12">
                                    <button class="btn btn-outline-success add_field_button">Add Creative Media</button>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Creative Uploads</label>
                                <div class="col-sm-8 input_fields_wrap"></div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script>
        $(document).ready(function() {
            var max_fields      = 100; //maximum input boxes allowed
            var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div><input class="form-control" type="file" name="media[]"/><a href="#" class="btn btn-sm btn-danger remove_field">Remove</a></div>'); //add input box
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
    </script>
@endpush


