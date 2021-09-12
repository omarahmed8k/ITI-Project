@extends('layouts.navbar')

@section('postcontent')
  <div class="container">
      <div class="row">

          <div class="col-12 col-md-2"></div>

          <div class="col-md-8">
              <div class="card">
                  <div class="card-header text-center font-weight-bold">Edit Profile Data</div>

                  <div class="card-body addPost">
                      <form class="was-validated" action="" method="POST">
                          <div class="row">
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">Bio <span>*</span></label>
                                  <textarea rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" required></textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">Image <span>*</span></label>
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input is-invalid" id="customFile" required>
                                      <label class="custom-file-label" for="customFile">Choose file (Required)</label>
                                  </div>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">FullName <span>*</span></label>
                                  <input type="input" rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" required></input>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">phone <span>*</span></label>
                                  <input type="input" rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" required></input>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">Email<span>*</span></label>
                                  <input type="input" rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" required></input>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">Password<span>*</span></label>
                                  <input type="password" rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" required></input>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="font-weight-bold">Website<span>*</span></label>
                                  <input type="input" rows="3" class="form-control w-100 is-invalid" id="validationTextarea" placeholder="Required" ></input>
                              </div>
                              <div class="col-md-12 mb-3">
                              <label class="font-weight-bold" style="margin-right:1rem;">Gender<span>*</span></label>
                              <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1" style="color:black;font-weight:bold">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2" style="color:black; font-weight:bold">Female</label>
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
