<x-app-layout>
    <nav class="navbar navbar-main navbar-expand-lg px-0 ms-2 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                            href="{{ url('admin/dashboard') }}">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Posts</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Posts</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 " id="navbar">
                <div class="ms-auto d-flex align-items-center">
                    <a href="{{ url('admin/post/add') }}" class="btn bg-gradient-primary ">Add New Post</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th
                                            class="text-uppercase text-start text-secondary text-xxs font-weight-bolder opacity-7">
                                            Project Title
                                        </th>
                                        <th
                                            class="text-uppercase text-start text-secondary text-xxs font-weight-bolder opacity-7">
                                            Post Content
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                            Featured
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                            Category
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        @if ($post->image)
                                                            <img width='60' height='48'
                                                                class="avatar avatar-sm rounded-circle me-2""
                                                                src='{{ asset("post_images/post_$post->id/$post->image") }}' />
                                                        @else
                                                            <img width='60' height='48'
                                                                class="avatar avatar-sm rounded-circle me-2""
                                                                src='{{ asset('assetsBackEnd/frontend/images/posts/featured2.jpg') }}' />
                                                        @endif
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm text-truncate"
                                                            style="max-width: 130px;">{{ $post->post_title }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold ps-2 mb-0 text-truncate"
                                                    style="max-width: 120px;">{{ $post->content }}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($post->is_featured)
                                                    <i class="bg-success"></i>
                                                    <span class="badge badge-sm bg-gradient-success">Yes</span>
                                                @else
                                                    <i class="bg-danger"></i>
                                                    <span class="badge badge-sm bg-gradient-secondary">No</span>
                                                @endif
                                            </td>
                                            <td class="text-center text-sm font-weight-bold">
                                                {{ $post->categories->name }}</td>
                                            <td class="align-middle text-center">
                                                <button class="btn btn-link text-secondary mb-0"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v text-xs"></i>
                                                </button>
                                                <ul class="dropdown-menu shadow-lg"
                                                    aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('admin/post/edit') }}/{{ $post->id }}">
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('admin/post/delete') }}/{{ $post->id }}">
                                                            Delete
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('post/markAsFeatured') }}/{{ $post->id }}">
                                                            Mark as featured
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('post/markAsUnfeatured') }}/{{ $post->id }}">
                                                            Mark as unfeatured
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
