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

                    <form action="/music/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="name">Title</label>
                          <input type="text" class="form-control" name="name" id="" aria-describedby="nameHelpId" placeholder="">
                          <small id="nameHelpId" class="form-text text-muted">Enter the music title</small>

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">Music File</label>
                            <input type="file" class="form-control-file" name="file" id="file" placeholder="" aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload your music file</small>

                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="file_type">File Type</label>
                          <select class="form-control" name="file_type" id="file_type">
                            <option value="audio">Audio</option>
                            <option value="video">Video</option>
                          </select>

                            @error('file_type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" class="form-control-file" name="picture" id="picture" placeholder="" aria-describedby="pictureFileHelpId">
                            <small id="pictureFileHelpId" class="form-text text-muted">Upload picture for your music</small>

                            @error('picture')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="genre_id">Genre</label>
                            <select class="form-control" name="genre_id" id="genre_id">
                              @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                              @endforeach
                            </select>

                            @error('genre_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="label_id">Label</label>
                            <select class="form-control" name="label_id" id="label_id">
                              @foreach ($labels as $label)
                                <option value="{{ $label->id }}">{{ $label->name }}</option>
                              @endforeach
                            </select>

                              @error('label_id')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                        <div class="form-group">
                          <label for="release_year">Release Year</label>
                          <input type="text" class="form-control" name="release_year" id="" aria-describedby="release_yearHelpId" placeholder="1989">
                          <small id="release_yearHelpId" class="form-text text-muted">Enter the release year</small>

                          @error('release_year')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
