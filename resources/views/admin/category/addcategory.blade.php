@extends('layouts.admin')


@section('content')
    
<form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Category
                       <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Name</label>
                            <input type="text" for="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Slug</label>
                            <input type="text" for="slug" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Description</label>
                            <textarea type="text" for="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Image</label>
                            <input type="file" for="image" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" for="status" >
                        </div>

                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Ttitle</label>
                            <input type="text" for="meta_title" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Keyword</label>
                            <textarea type="text" for="meta_keyword" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea type="text" for="meta_description" rows="3" class="form-control"></textarea>
                        </div>
                       <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-success  float-end">Save</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection