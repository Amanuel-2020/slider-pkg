@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="{{ route('categories.index') }}" title="Slides">Slides</a></li>
@endsection
@section('content')
    <div class="row no-gutters">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">Slides</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Priority</th>
                        <th>Link</th>
                        <th>Display Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slides as $slide)
                        <tr role="row">
                            <td>{{ $slide->id }}</td>
                            <td width="80">
                                <img src="@if(! is_null($slide->media)){{ $slide->media->thumb }} @endif" alt=""
                                     width="80"/>
                            </td>
                            <td>{{ $slide->priority }}</td>
                            <td>{{ $slide->link }}</td>
                            <td>@lang($slide->status)</td>
                            <td>
                                <a href=""
                                   onclick="deleteItem(event, '{{ route('slides.destroy', $slide->id) }}');"
                                   class="item-delete mlg-15" title="Delete"></a>
                                <a href="{{ route('slides.edit', $slide->id) }}" class="item-edit"
                                   title="Edit"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4 bg-white">
            @include('Sliders::create')
        </div>
    </div>
@endsection
