@extends('layout')

@section('header')
    <div class="page-header">
         <a href="/openings"><i class="fa fa-arrow-left"></i> Back to Jobs List</a>
          <hr>
        <h2><i class="fa fa-user main-color"></i> Add New Job </h2>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">



            <form action="{{ route('openings.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('type')) has-error @endif">
                       <label for="type-field">Type</label>
                    <input type="text" id="type-field" name="type" class="form-control" value="{{ old("type") }}"/>
                       @if($errors->has("type"))
                        <span class="help-block">{{ $errors->first("type") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('duties')) has-error @endif">
                       <label for="duties-field">Duties</label>
                    <textarea class="form-control" id="duties-field" rows="3" name="duties">{{ old("duties") }}</textarea>
                       @if($errors->has("duties"))
                        <span class="help-block">{{ $errors->first("duties") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qualifications')) has-error @endif">
                       <label for="qualifications-field">Qualifications</label>
                    <textarea class="form-control" id="qualifications-field" rows="3" name="qualifications">{{ old("qualifications") }}</textarea>
                       @if($errors->has("qualifications"))
                        <span class="help-block">{{ $errors->first("qualifications") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('apply')) has-error @endif">
                       <label for="apply-field">Apply</label>
                    <textarea class="form-control" id="apply-field" rows="3" name="apply">{{ old("apply") }}</textarea>
                       @if($errors->has("apply"))
                        <span class="help-block">{{ $errors->first("apply") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('hours')) has-error @endif">
                       <label for="hours-field">Hours</label>
                    <input type="text" id="hours-field" name="hours" class="form-control" value="{{ old("hours") }}"/>
                       @if($errors->has("hours"))
                        <span class="help-block">{{ $errors->first("hours") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pay')) has-error @endif">
                       <label for="pay-field">Pay</label>
                    <input type="text" id="pay-field" name="pay" class="form-control" value="{{ old("pay") }}"/>
                       @if($errors->has("pay"))
                        <span class="help-block">{{ $errors->first("pay") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('duration')) has-error @endif">
                       <label for="duration-field">Duration</label>
                    <input type="text" id="duration-field" name="duration" class="form-control" value="{{ old("duration") }}"/>
                       @if($errors->has("duration"))
                        <span class="help-block">{{ $errors->first("duration") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('location')) has-error @endif">
                       <label for="location-field">Location</label>
                    <input type="text" id="location-field" name="location" class="form-control" value="{{ old("location") }}"/>
                       @if($errors->has("location"))
                        <span class="help-block">{{ $errors->first("location") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('updated')) has-error @endif">
                       <label for="updated-field">Updated</label>
                    <input type="text" id="updated-field" name="updated" class="form-control" value="{{ old("updated") }}"/>
                       @if($errors->has("updated"))
                        <span class="help-block">{{ $errors->first("updated") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('entered_by')) has-error @endif">
                       <label for="entered_by-field">Entered By</label>
                    <input type="text" id="entered_by-field" name="entered_by" class="form-control" value="{{ old("entered_by") }}"/>
                       @if($errors->has("entered_by"))
                        <span class="help-block">{{ $errors->first("entered_by") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Add New Job</button>
                   
                </div>
            </form>

        </div>
    </div>
@endsection