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
                @foreach($projects as $project)
                    <h1 class="display-4">{{ $project->title }}</h1>
                    <p>{{ $project->description }}</p>
                    <p>Created: {{ date('d.m.Y h:i:s', strtotime($project->created_at)) }}</p>
                    <a href="{{ route('project.show', ['project' => $project->id]) }}"
                       class="btn btn-outline-info wide rounded-0">Edit</a>
                    <a href="{{ route('project.delete', ['project' => $project->id]) }}">
                        <button class="btn btn-outline-danger wide rounded-0" type="submit">Delete</button>
                    </a>
                    <hr>
                @endforeach
            @endisset

            @empty($projects)
                <p>Empty! :(</p>
            @endempty
        </div>
    </div>
@endsection

