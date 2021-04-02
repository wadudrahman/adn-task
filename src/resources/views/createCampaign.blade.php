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
                    <form class="theme-form">
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
@endpush


