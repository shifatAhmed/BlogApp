@extends('layouts.app')

@section('content')

<div class="panel panel-default">

        <div class="panel-body">


                <table class="table table-hover">
                        <thead>
                            <th>
                                Category name
                            </th>

                            <th>
                                Title
                            </th>

                            <th>
                                Edit
                            </th>
                            <th>
                                Trash
                            </th>

                        </thead>

                        <tbody>

                            @foreach($posts as $post)

                            <tr>
                                <td>image</td>
                                <td>{{$post->title}}</td>

                                <td>
                                    <a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-xs btn-success">
                                        Edit
                                    </a>
                                </td>

                                <td>
                                <a href="{{ route('post.delete',['id' => $post->id]) }}" class="btn btn-xs btn-danger">
                                            trash
                                        </a>
                                    </td>

                            </tr>

                            @endforeach


                        </tbody>
                    </table>


        </div>

</div>



@endsection
