@extends('layouts.app')


@section('content')
<div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h3>Add news</h3>
            <?php $_POST = array(); ?>
            <form class="form-horizontal" method="POST" action="{{ route('news.save') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label" for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                    <!-- <textarea name="description" class="form-control" id="description" name="description">Enter text here...</textarea> -->
                </div>
                
                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{old('link')}}">
                </div>
                <div class="form-group">
                    <label for="category">Select category:</label>                    
                    <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add News</button>
            </form>
        </div>
    </div>
@endsection