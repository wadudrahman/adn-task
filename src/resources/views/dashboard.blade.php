@extends('layouts.app')

@section('title', 'Dashboard')

@section('parent', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('partials.alerts')
            <div class="col-sm-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr class="text-center">
                                <th rowspan="2" scope="col">#</th>
                                <th rowspan="2" scope="col">Campaign Title</th>
                                <th rowspan="2" scope="col">Live At</th>
                                <th rowspan="2" scope="col">Terminate At</th>
                                <th rowspan="2" scope="col">Lifespan</th>
                                <th rowspan="2" scope="col">Current Age</th>
                                <th colspan="2" scope="col">Budget</th>
                                <th rowspan="2" scope="col">Actions</th>
                            </tr>
                            <tr class="text-center">
                                <th>Daily</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>My First Campaign</td>
                                <td>01 April, 2021</td>
                                <td>10 April, 2021</td>
                                <td>10 Days</td>
                                <td>4 Days</td>
                                <td>$7</td>
                                <td>$70</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-info">Preview Uploads</a>
                                    <a class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush


