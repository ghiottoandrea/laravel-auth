@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <div class="row">

            <div class="col">
                <div class="card p-1">
                    <div class="title_box d-flex bg-gradient align-items-center justify-content-between bg-secondary p-3">
                        <h3 class="card-title text-light fw-bolder pt-2">
                            {{ $project->title }}
                        </h3>
                        <a class="btn btn-light text-decoration-none text-secondary" href="{{ route('admin.projects.index') }}">
                            <i class="fa-solid fa-circle-left"></i> 
                            Back to the projects</a>
                    </div>


                    <div class="card-body text-secondary">
                        <small>Description:</small>
                        <p class="card-text">
                            {{ $project->description }}
                        </p>
                        <div class="project-date">
                            <div class="projectStart">
                               Start Date: {{ $project->project_start_date }}
                            </div>
                            <div class="projectEnd">
                                End Date: {{ $project->project_end_date }}
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex bg-dark text-light d-flex justify-content-evenly">
                        <a class="btn rounded text-decoration-none text-light p-bg-light px-3 py-1 fs-5"
                            href="{{ $project->link_to_project_view }}">
                            Preview
                        </a>
                        <a class="btn rounded text-decoration-none text-light p-bg-light px-3 -py1 fs-5"
                            href="{{ $project->link_to_source_code }}">
                            View Source Code
                        </a>
                    </div>

                    








                    <div class="img_box">
                        <img class="card-img-bottom" src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg"
                            alt="">
                        <span class="position-absolute bottom-0 start-0 text-dark bg-info rounded px-3 py-1 m-2">
                            Website preview
                        </span>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection