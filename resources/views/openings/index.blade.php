@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h2>
            <i class="fa fa-bars main-color"></i> Current Jobs
            <a class="btn btn-default pull-right" href="{{ route('openings.create') }}"><i class="fa fa-plus"></i> New Job</a>
        </h2>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($openings->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                        <th>TYPE</th>
                        
                        <th>ENTERED BY</th>
                            <th class="text-right">ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($openings as $opening)
                            <tr>
                                <td>{{$opening->id}}</td>
                                <td><a class="btn btn-link" href="{{ route('openings.edit', $opening->id) }}">{{$opening->title}}</a></td>
                    <td>{{$opening->type}}</td>
                   
                    
                    <td>{{$opening->entered_by}}</td>
                                <td class="text-right">
                                    <a class="btn btn-link" href="{{ route('openings.show', $opening->id) }}">View</a>
                                    <a class="btn btn-link" href="{{ route('openings.edit', $opening->id) }}">Edit</a>
                                    <form action="{{ route('openings.destroy', $opening->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-link">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $openings->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection