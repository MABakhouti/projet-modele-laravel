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
                            <h6>Add Category</h6>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive p-0">
                                <h6
                                    class="text-uppercase text-start text-secondary text-xxs font-weight-bolder opacity-7">
                                    Category Information</h6>

                                <form action="{{ url('admin/category/update') }}/{{ $category->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Category Name</label>
                                        <input type="text" name="category_name" class="form-control"
                                            placeholder="Category Name" value="{{ $category->name }}">
                                    </div>
                                    <div class="d-flex mt-3 justify-content-end">
                                        <a href="{{ url('admin/categories') }}" class="btn bg-gradient-default me-4">Back</a>
                                        <button type="submit" class="btn bg-gradient-success bg-success">Edit Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

