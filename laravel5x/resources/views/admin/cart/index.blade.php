@extends('admin.base')

@section('content')
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Cart</a>
    </li>
  </ol>
  <div class="row">
    <div class="col-md-12">
      <h3>This is Cart</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Image</th>
              <th>QTY</th>
              <th>Price</th>
              <th>Money</th>
              <th colspan="2" width="5%">Action</th>
            </tr>
          </thead>
          <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($data as $key => $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="https://previews.dropbox.com/p/thumb/AAWIPg-TgwqPKvlL1ksEROPZS2hddm4GziKd1tQqQoeuZsKCVbLJtZr18qZu7pDmMRER-NMjVNmPVBhN0tm-3Rw82SlOIF66js5tEfN1drYUoFqc5Ni0wMTyIOVVzVp21bHVMliRuZbBoayuCj91iGkuCmG7STIwAlnZhI7y4ksmyH6jNEVp64N8fZyKTKw0-7q414EQFCzgwFvPrdYV3Iq3wz8aKkHmdD52_OQJqpjoFFkIUogpHUDUz4XkuyfOQjM/p.jpeg?size_mode=5" alt="" width="50" height="50"></td>
                        <td>
                            <input type="text" value="{{ $item->qty }}" class="qty_{{ $item->id }}" >
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ ($item->qty * $item->price) }}</td>
                        <td>
                            <button title="" class="btn btn-info" onclick="updateCart('{{ $key }}',{{ $item->id }})" >Update</button>
                        </td>
                        <td>
                            <a title="" class="btn btn-danger" href="{{ route('admin.deleteCart',['id'=>$key]) }}">Delete</a>
                        </td>
                        @php
                            $i++
                        @endphp
                    </tr>
                @endforeach()
          </tbody>
          <tfoot>
              <tr>
                <td>
                    Total Items : {{ $total }} 
                </td>
                <td>
                    Total Buys : {{ $totalBuy }} 
                </td>
                <td>
                    <a href="{{ route('admin.deleteAll') }}" title="" class="btn btn-success">Delete All</a>
                </td>
              </tr>
          </tfoot>
        </table>
    </div>
  </div>
</div>
@endsection

@push('javascript')
    <script type="text/javascript">
        function updateCart(idCart , idRow){
            let qty = $('.qty_'+idRow).val().trim();
            let url = "{{ route('admin.updateCart') }}" + "?id=" + idCart + "&qty=" + qty;
            window.location.href = url; 
        }
    </script>
@endpush