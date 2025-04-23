@extends('backend.admin.layouts.master')
@section('title','Word Generator Update')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Word Generator Update</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="{{ url('admin/generator/word/edit').'/'.$id }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{ $data['name'] }}">
                </div>
                <div class="col-md-6">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug"  value="{{ url($data['slug'])  }}">
                </div>
                <div class="col-md-6">
                  <label for="keyword" class="form-label">keyword</label>
                  <input type="text" class="form-control" id="keyword" placeholder="Word, Noun, etc" name="keyword" value="{{ $data['keyword'] }}">
                </div>

                <div class="col-12" id="toolbar">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="editor" name="description" value="{{ $data['description'] }}">
                </div>
                
                <div class="col-12">
                  <label for="metatitle" class="form-label">Meta Title</label>
                  <input type="text" class="form-control" id="metatitle" placeholder="Meta Title" name="metatitle" value="{{ $data['metatitle'] }}">
                </div>

                <div class="col-12">
                  <label for="metadescription" class="form-label">Meta Description</label>
                  <input type="text" class="form-control" style="height: 100px"  id="metadescription" placeholder="Meta Description" name="metadescription" value="{{ $data['metadescription'] }}">
                </div>

                
                <div class="col-12">
                  <label for="adsdata" class="form-label">Ads Data</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  id="adsdata" name="adsdata">{{ $data['adsdata'] }}</textarea>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <label for="adsstatus" class="form-label">Ads Show</label>
                  <select id="adsstatus" class="form-select" name="adsstatus" >
                    <option selected="">Choose...</option>
                    <option value="publish" @php if( $data['status'] == "publish") echo 'selected="selected"';  @endphp>Show</option>
                    <option value="unpublish" @php if( $data['status'] == "unpublish") echo 'selected="selected"';  @endphp>Not Show</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="Status" class="form-label">Status</label>
                  <select id="Status" class="form-select" name="status">
                    <option selected="">Choose...</option>
                    <option value="publish" @php if( $data['status'] == "publish") echo 'selected="selected"';  @endphp>Publish</option>
                    <option value="unpublish"  @php if( $data['status'] == "unpublish") echo 'selected="selected"';  @endphp>Unpublish</option>
                  </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>
    </div>
</section>


  {{-- @include('backend.common.footer') --}}
@endsection
