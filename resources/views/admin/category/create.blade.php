@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category
                        <a href="{{ url('admin/category') }}" class="btn btn-warning float-end">All Categories</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" style="border-radius: 10px">
                                @error('name')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" style="border-radius: 10px">
                                @error('slug')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control"  rows="3" style="border-radius: 10px"></textarea>
                                @error('description')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" style="border-radius: 10px">
                                @error('image')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label><br>
                                <input type="checkbox" name="status">
                                @error('status')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> --}}

                            <div>
                                <div class="form-check form-switch col-md-2 mb-3 form-group">
                                    <input class="form-check-input me-4" id="name" type="checkbox" name="status" style="margin: auto">
                                    <label class="form-check-label" for="name">Status</label>
                                    @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                  </div>
                            </div>


                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" style="border-radius: 10px">
                                @error('meta_title')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" style="border-radius: 10px">
                                @error('meta_keyword')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control"  rows="3" style="border-radius: 10px"></textarea>
                                @error('meta_description')
                                   <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
