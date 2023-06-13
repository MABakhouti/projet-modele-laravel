<x-app-layout>
    <nav class="navbar navbar-main navbar-expand-lg px-0 ms-2 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 border-bottom pb-2">
                            <h6>Add Post</h6>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive p-0">
                                <h6
                                    class="text-uppercase text-start text-secondary text-xxs font-weight-bolder opacity-7">
                                    POST INFORMATION</h6>

                                <form action="{{ url('admin/post/store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group w-lg-50">
                                        <label for="exampleFormControlInput1">Post Title</label>
                                        <input type="text" name="post_title" class="form-control"
                                            placeholder="Post Title">
                                    </div>
                                    <div class="form-group w-lg-50">
                                        <label class="form-control-label" for="input-username">Post
                                            Category</label>
                                        <select name="cat_id" class="form-select">
                                            @foreach ($categories as $key => $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="pl-lg-4 ">
                                        <div class="form-group ">
                                            <label>Post Content</label>
                                            <textarea name="post_content" rows="10" class="form-control " placeholder="Enter post title"></textarea>
                                        </div>
                                    </div>
                                    <div class="pl-lg-4 ">
                                        <label class="form-control-label ">Upload Post image</label>
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control"
                                                id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3 justify-content-end">
                                        <a href="{{ url('admin/post') }}" class="btn bg-gradient-default me-4">Back</a>
                                        <button type="submit" class="btn bg-gradient-success bg-success">Add Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

