@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{$post['title']}}" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" value="{{$post['content']}}" id="content" name="content" class="form-control">
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{$post->tags->contains($tag->id) ? 'checked' : ''}}>
                            {{$tag->name}}
                        </label>
                    </div>
                @endforeach
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$postId}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection