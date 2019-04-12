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
                                Restore
                            </th>
                            <th>
                                destory
                            </th>


                        </thead>

                        <tbody>

                            @foreach($posts as $post)

                            <tr>
                                <td>image</td>
                                <td>{{$post->title}}</td>

                                <td>
                                    <a href="" class="btn btn-xs btn-info">
                                        Edit
                                    </a>
                                </td>

                                <td>
                                <a href="{{ route('post.restore',['id' => $post->id]) }}" class="btn btn-xs btn-success">
                                            Restore
                                        </a>
                                 </td>

                                 <td>
                                    <a href="{{ route('post.kill',['id' => $post->id]) }}" class="btn btn-xs btn-danger">
                                                Delete
                                            </a>
                                     </td>

                            </tr>

                            @endforeach


                        </tbody>
                    </table>


        </div>

</div>



@endsection
