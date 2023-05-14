@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category
                        <a href="{{ url('admin/category/create') }}" class="btn btn-warning float-end">All Categories</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control"  rows="3" style="border-radius: 10px"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label><br>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Image</label>
                                <input type="text" name="image" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" style="border-radius: 10px">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control"  rows="3" style="border-radius: 10px"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection