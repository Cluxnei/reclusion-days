@extends('adminlte::page')

@section('title', __('messages.title'))

@section('content_header')
    <input type="hidden" id="success-message" value="{{ session()->get('success') }}">
    <input type="hidden" id="error-message" value="{{ session()->get('error') }}">
    <h1 class="m-0 text-dark">@lang('messages.admin.dashboard')</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.works-of-arts.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">@lang('messages.admin.title')</label>
                            <input type="text" class="form-control" id="title"
                                   placeholder="@lang('messages.admin.title')" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="author">@lang('messages.admin.author')</label>
                            <input type="text" class="form-control" id="author"
                                   placeholder="@lang('messages.admin.author')" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="technique">@lang('messages.admin.technique')</label>
                            <input type="text" class="form-control" id="technique"
                                   placeholder="@lang('messages.admin.technique')" name="technique">
                        </div>
                        <div class="form-group">
                            <label for="description">@lang('messages.admin.description')</label>
                            <textarea id="description" name="description" class="form-control" rows="3"
                                      placeholder="@lang('messages.admin.description')..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">@lang('messages.admin.photo')</label>
                            <input type="file" id="photo" name="photo" accept="image/*" required>
                            <p class="help-block">@lang('messages.admin.photo-help')</p>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="@lang('messages.admin.submit')" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
