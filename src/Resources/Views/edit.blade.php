@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="{{ route('slides.index') }}" title="Slides">Slides</a></li>
    <li><a href="#" title="Edit Slide">Edit Slide</a></li>
@endsection
@section('content')
    <div class="row no-gutters">
        <div class="col-6 bg-white">
            <p class="box__title">Update Slide</p>
            <form action="{{ route('slides.update', $slide->id) }}" method="post" class="padding-30" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <img src="@if(! is_null($slide->media)){{ $slide->media->thumb }} @endif" alt="" width="80"/>
                <x-input type="file" name="image" placeholder="Image" />
                <x-input type="number" name="priority" placeholder="Priority" value="{{ $slide->priority }}" />
                <x-input type="text" name="link" placeholder="Link" value="{{ $slide->link }}" />
                <p class="box__title margin-bottom-15">Display Status</p>
                <select name="status" id="status">
                    <option value="1" {{ $slide->status == 1 ? "selected" : "" }}>Active</option>
                    <option value="0" {{ $slide->status == 0 ? "selected" : "" }}>Inactive</option>
                </select>
                <button class="btn btn-brand">Update</button>
            </form>
        </div>
    </div>
@endsection
