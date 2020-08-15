@extends('Backend.admin')
@section('content')
  <section>
      <div class="container-fluid">

          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto mt-5">
                  <div id="newsupload">
                      <hr style="border: 1px solid red">
                      <h3 class="text-center text-primary">NEWS Upload</h3>
                      <hr style="border: 1px solid red">
                      <form action="NEWS" method="POST">
                          @csrf
                        <div class="form-group">
                            <label for="my-input">Title</label>
                            <input id="my-input" class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Detail</label>
                            <textarea id="my-input" class="form-control" type="text" name="detail" style="height: 250px"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </form>
                  </div>
                  </div>

                </div>
    </section>
@endsection
