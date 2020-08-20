@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload Music') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/music/store" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="name">Title</label>
                          <input type="text" class="form-control" name="name" id="" aria-describedby="nameHelpId" placeholder="">
                          <small id="nameHelpId" class="form-text text-muted">Enter the music title</small>
                        </div>
                        <div class="form-group">
                          <label for="file">File Type</label>
                          <select class="form-control" name="file" id="file">
                            <option value="audio">Audio</option>
                            <option value="video">Video</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" class="form-control-file" name="picture" id="picture" placeholder="" aria-describedby="fileHelpId">
                            <small id="pictureFileHelpId" class="form-text text-muted">Upload picture for your music</small>
                        </div>
                        <div class="form-group">
                          <label for="release_year">Release Year</label>
                          <input type="text" class="form-control" name="release_year" id="" aria-describedby="release_yearHelpId" placeholder="1989">
                          <small id="release_yearHelpId" class="form-text text-muted">Enter the release year</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
