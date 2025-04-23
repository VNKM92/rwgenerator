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
            @foreach ($data as $item )
                <tr>
                  <th scope="row">{{ $item->id + 1  }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->slug }}</td>
                  <td>{{ substr($item->description,0,20)}}</td>
                  <td>{{ $item->status }}</td>
                </tr>
            @endforeach
            {{ $posts->links() }}
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </div>
  </div>
</section>

{{-- @include('backend.common.footer') --}}
@endsection