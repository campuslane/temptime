@extends('layout')
@section('header')
<div class="page-header">
        <h1>Openings / Show #{{$opening->id}}</h1>
        <form action="{{ route('openings.destroy', $opening->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('openings.edit', $opening->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$opening->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="type">TYPE</label>
                     <p class="form-control-static">{{$opening->type}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$opening->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="duties">DUTIES</label>
                     <p class="form-control-static">{!! nl2br($opening->duties) !!}</p>
                </div>
                    <div class="form-group">
                     <label for="qualifications">QUALIFICATIONS</label>
                     <p class="form-control-static">{{$opening->qualifications}}</p>
                </div>
                    <div class="form-group">
                     <label for="apply">APPLY</label>
                     <p class="form-control-static">{{$opening->apply}}</p>
                </div>
                    <div class="form-group">
                     <label for="hours">HOURS</label>
                     <p class="form-control-static">{{$opening->hours}}</p>
                </div>
                    <div class="form-group">
                     <label for="pay">PAY</label>
                     <p class="form-control-static">{{$opening->pay}}</p>
                </div>
                    <div class="form-group">
                     <label for="duration">DURATION</label>
                     <p class="form-control-static">{{$opening->duration}}</p>
                </div>
                    <div class="form-group">
                     <label for="location">LOCATION</label>
                     <p class="form-control-static">{{$opening->location}}</p>
                </div>
                    <div class="form-group">
                     <label for="updated">UPDATED</label>
                     <p class="form-control-static">{{$opening->updated}}</p>
                </div>
                    <div class="form-group">
                     <label for="entered_by">ENTERED_BY</label>
                     <p class="form-control-static">{{$opening->entered_by}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('openings.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection