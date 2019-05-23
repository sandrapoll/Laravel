<?php
/**
 * Created by PhpStorm.
 * User: sandra.poll
 * Date: 23.05.2019
 * Time: 10:45
 */
?>
@extends('master')

@section('content')
<div class="full-height">
    <div class="content top">
        @isset($projects)
            {{--<p>{{ $projects }}</p>--}}
            @foreach($projects as $project)
                <h1 class="display-4">{{ $project->title }}</h1>
                <p>{{ $project->description }}</p>
                <hr>
            @endforeach
        @endisset

        @empty($projects)
            <p>Empty it is</p>
        @endempty
    </div>
</div>
@endsection

