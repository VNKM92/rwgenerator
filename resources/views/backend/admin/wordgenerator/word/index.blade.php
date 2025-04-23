@extends('backend.admin.layouts.master')
@section('title','Word Generator')
@section('content')


<section class="section">
  <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Random Word Generator</h5>
            <!-- Table with stripped rows -->

            <div class="row">
              <div class="col-lg-2 pull-left">
              </div>

              <div class="col-lg-7 pull-left">
              </div>

        
              <div class="col-lg-3 pull-right">
                <label>Add</label>
                <a href="{{ url('admin/generator/word/add') }}"> ++ </a>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-2 pull-left">
                <label>No.</label>
                <input type="text" value="10" name="No.">
              </div>

              <div class="col-lg-7 pull-left">
              </div>

        
              <div class="col-lg-3 pull-right">
                <label>Search</label>
                <input type="text" value="Search" name="Search" >
              </div>
            </div>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Description</th>
                  <th scope="col">Status</th>
                  <th scope="col">Posted On</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item )
                  <tr>
                    <th scope="row">{{  $item->id  }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{!! substr($item->description,0,20) !!}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at->format('M d, Y') }}</td>
                    <td>

                      <input type="hidden" value="{{ $item->id }}" id="wdid">
                      <a href="{{url('admin/ratehistory').'/'.$item->id}}" type="button"
                        class="btn btn-sm "><i class="bi bi-view-list"></i><span
                          class="tooltip">RateView</span></a>

                      <button type="button" class="btn btn-sm radius-30 px-4" id="delete_data"><i
                        class="bx bx-trash"></i><span class="tooltip">Delete</span></button>
                        <form method="POST" action="{{url('/admin/generator/word/delete'.$item->id)}}"
                          accept-charset="UTF-8" style="display:inline">
                          <input type="hidden" value="{{ $item->id }}" name="load_id">
                          <button type="submit" id="newiddata" class="btn btn-sm radius-30 px-4"
                            id="delete_data"><i class="bx bx-car"></i><span
                              class="tooltip">dele</span>
                            </button>
                        </form>
                        
                    </td>
                    
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $data->links() }}
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
  </div>
</section>

{{-- @include('backend.common.footer') --}}
@endsection