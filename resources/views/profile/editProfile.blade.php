@extends('layouts.navbar')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-2"></div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold">Edit Profile Data</div>

                <div class="card-body addPost">
                    <form class="was-validated" action="{{ route('edit.data') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Bio <span>*</span></label>
                                <textarea rows="3" class="form-control w-100 is-invalid" placeholder="Required" name="bioedit" required></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Image <span>*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input is-invalid" id="customFile" name="image" required>
                                    <label class="custom-file-label" for="customFile">Choose file (Required)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">FullName <span>*</span></label>
                                <input type="text" class="form-control w-100 is-invalid" placeholder="Required" name="nameedit" required></input>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Phone <span>*</span></label>
                                <input type="tel" class="form-control w-100 is-invalid" placeholder="Required" name="phoneedit" required></input>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Email<span>*</span></label>
                                <input type="email" class="form-control w-100 is-invalid" placeholder="Required" name="emailedit" required></input>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Password<span>*</span></label>
                                <input type="password" class="form-control w-100 is-invalid" placeholder="Required" name="passedit" required></input>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold">Website<span>*</span></label>
                                <input type="text" class="form-control w-100 is-invalid" placeholder="Required" name="websiteedit"></input>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="font-weight-bold mr-2">Gender<span>*</span></label>
                                <div class="form-check form-check-inline">
                                    <input name="genderedit" class="form-check-input" type="radio" id="inlineCheckbox1" value="male" required>
                                    <label class="form-check-label text-muted" for="inlineCheckbox1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="genderedit" class="form-check-input" type="radio" id="inlineCheckbox2" value="female" required>
                                    <label class="form-check-label text-muted" for="inlineCheckbox2">Female</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-block btn-secondary mt-3" type="submit">Save</button>
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
