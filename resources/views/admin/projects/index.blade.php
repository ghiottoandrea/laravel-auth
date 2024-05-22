@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="table-responsive ">
            <table class="table table-light table-hover mt-5">
                <thead class="">
                    <tr class="fw-bolder fs-5 table-secondary">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Project Start</th>
                        <th scope="col">Project End</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th class="text-danger" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody class="">

                    <tr class="p-bg-light">

                        <td colspan="7" height="80" class="align-middle text-center fw-bolder" scope="row">

                            <a class="text-decoration-none text-success fs-5" href="{{ route('admin.projects.create') }}">

                                Add a new project

                            </a>

                        </td>
                    </tr>

                    @foreach ($projects as $project)
                        <tr class="p-bg-light">
                            <td class="align-middle" scope="row">{{ $project->title }}</td>
                            <td width="40%" class="align-middle fw-light" scope="row">{{ $project->description }}</td>
                            <td class="align-middle" scope="row">{{ $project->project_start_date }}</td>
                            <td class="align-middle" scope="row">{{ $project->project_end_date }}</td>


                            <td class="align-middle" scope="row">
                                <a class="text-decoration-none text-dark btn btn-light border fs-4"
                                    href="{{ route('admin.projects.show', $project) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="align-middle" scope="row">
                                <a class="text-decoration-none text-dark btn btn-light border fs-4"
                                    href="{{ route('admin.projects.edit', $project) }}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td class="align-middle" scope="row">
                                <button type="button" class="btn btn-light border py-2" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $project->id }}">
                                    <i class="fas fa-trash text-danger fs-4 py-1"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Modal Body -->
                        <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $project->id }}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId-{{ $project->id }}">
                                            Are you sure you want to delete this item?
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        If you press confirm you are going to delete this item from you table and not be
                                        able to recover
                                        it.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Confirm
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>

            {{-- --------------------- --}}


        </div>

        <script>
            const myModal = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script>

    </div>
@endsection