@extends('layouts.app')


@section('content')
<div class="row-fluid">
        <table class="table table-striped table-hover">
        <thead class="thead-inverse">
            <tr>
                <th>
                    <div class="h4 text-center">Author</div>
                </th>
                <th>
                    <div class="h4 text-center">Title</div>
                </th>
                <th>
                    <div class="h4 text-center">Description</div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)      
            <tr style="cursor:hand">
                    <td style="width: 10%;">
                    {{\App\Http\Controllers\HomeController::getUser($post->id_user)->name}}
                </td>
                <td>
                    {{$post->title}}
                </td>
                <td>
                        {{$post->description}}
                </td>
                <td>                
                <a href="{{URL::to('news') . '/' . $post->id}}">
                View
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>  
@endsection