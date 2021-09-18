@extends('layouts.navbar')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-2"></div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold">Add New Post</div>

                <div class="card-body addPost">
                    <form class="was-validated" action="{{ url('add-posts') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Caption <span>*</span></label>
                                <textarea rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" name="caption" required></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Image <span>*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input is-invalid" id="customFile" name="image" required>
                                    <label class="custom-file-label" for="customFile">Choose file (Required)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-block btn-secondary mt-3" type="submit">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-2"></div>

    </div>
</div>
@endsection
