@extends('admin.base')

@section('content')
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Product</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row">
    <div class="col-md-8">
      <h3>This is Product</h3>
    </div>
    <div class="col-md-4">
      <a href="{{ route('admin.listCart') }}" class="btn btn-warning" title="">Cart</a>
    </div>
  </div>
  <div class="row">
    @foreach($data as $key => $items)
      <div class="col-md-4">
        <img src="https://previews.dropbox.com/p/thumb/AAWIPg-TgwqPKvlL1ksEROPZS2hddm4GziKd1tQqQoeuZsKCVbLJtZr18qZu7pDmMRER-NMjVNmPVBhN0tm-3Rw82SlOIF66js5tEfN1drYUoFqc5Ni0wMTyIOVVzVp21bHVMliRuZbBoayuCj91iGkuCmG7STIwAlnZhI7y4ksmyH6jNEVp64N8fZyKTKw0-7q414EQFCzgwFvPrdYV3Iq3wz8aKkHmdD52_OQJqpjoFFkIUogpHUDUz4XkuyfOQjM/p.jpeg?size_mode=5" alt="" height="150" width="150">
        <p>{{ $items->name }}</p>
        <p>{{ number_format($items->money) }}</p>
        <a href="{{ route('admin.addCart',['id'=>$items->id]) }}" class="btn btn-primary btn-sm" title="">Add Cart</a>
      </div>
    @endforeach()
  </div>
</div>
@endsection