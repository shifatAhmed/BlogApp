@extends('layouts.app')

@section('content')


 @include('admin.includes.errors')



  <div class="panel panel-default">
        <div class="panel-heading">
            Update Category:
        </div>

        <div class="panel-body">
            <form action="{{ action('CategoriesController@update',['id'=> $category->id]) }}" method="POST" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                        <label for="title">Name</label>
                <input type="text" name="name"  value="{{$category->name}}" class="form-control">
                </div>


                <div>
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Category</button>
                    </div>
                </div>

            </form>
        </div>
  </div>
@stop
