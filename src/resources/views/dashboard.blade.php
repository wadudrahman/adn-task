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
                                <th colspan="2" scope="col">Budget</th>
                                <th rowspan="2" scope="col">Actions</th>
                            </tr>
                            <tr class="text-center">
                                <th>Daily</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($campaigns)<1)
                                <tr>
                                    <td colspan="7" class="text-center">No Campaign Found</td>
                                </tr>
                            @else
                                @foreach($campaigns as $campaign)
                                    <tr>
                                        <th scope="row" class="text-center">{{ ++$loop->index }}</th>
                                        <td>{{ $campaign->title }}</td>
                                        <td>{{ $campaign->start_from }}</td>
                                        <td>{{ $campaign->end_at }}</td>
                                        <td>$ {{ $campaign->daily_budget }}</td>
                                        <td>$ {{ $campaign->total_budget }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-info" type="button" data-toggle="modal" data-target="#exampleModalCenter">Preview Media</button>
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="gallery my-gallery card-body row" itemscope=""
                                                             data-pswp-uid="1">
                                                            @foreach($campaigns as $campaign)
                                                                @foreach($campaign->media as $media)
                                                                    <figure class="col-xl-3 col-md-4 col-6"
                                                                            itemprop="associatedMedia" itemscope="">
                                                                        <img class="img-thumbnail"
                                                                             src="{{ asset('images/' . $media->path) }}"
                                                                             itemprop="thumbnail"
                                                                             alt="Image description">
                                                                        <figcaption itemprop="caption description">
                                                                            Creative
                                                                            Upload {{ ++$loop->index }}</figcaption>
                                                                    </figure>
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-outline-warning" href="{{ route('campaign.edit.get', ['campaignId' => $campaign->id]) }}">Edit</a>
                                            <a class="btn btn-sm btn-outline-danger" href="{{ route('campaign.delete', ['campaignId' => $campaign->id]) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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


