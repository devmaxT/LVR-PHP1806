@extends('admin.base')

@section('content')
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Profile</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">This is profile</h3>
      <h3 class="text-center">{{ $mess }}</h3>
    </div>
  </div>
  <div class="row mb-4 mt-4">
    <div class="col-md-4">
      <a href="{{ route('admin.formAddProfile') }}" class="btn btn-primary" title="">Add +</a>
    </div>
    <div class="col-md-8">
        <div class="row ">
            <div class="col-md-9">
                <input type="text" class="form-control" id="txtSearch" name="" value="">
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary" id="btnSearch">Search</button>
            </div>
        </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>@lang('profilelang.fullname')</th>
                <th>@lang('profilelang.nickname')</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>@lang('profilelang.phone')</th>
                <th>@lang('profilelang.address')</th>
                <th>@lang('profilelang.birthday')</th>
                <th>@lang('profilelang.gender')</th>
                <th>@lang('profilelang.single')</th>
                <th>@lang('profilelang.status')</th>
                <th>@lang('profilelang.description')</th>
                <th colspan="2" width="5%" class="text-center">@lang('profilelang.action')</th>
            </tr>
        </thead>    
        <tbody>
            @foreach ($info as $key => $item)
                <tr>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->nickname }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{ URL::to('/upload/images/') }}/{{ $item->avatar }}" alt="avatar" width="100" height="100"></td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->birthday }}</td>
                    <td>{{ $item->gender == 1 ? 'Man' : 'Female' }}</td>
                    <td>{{ $item->single == 1 ? 'Alone' : 'Happy'}}</td>
                    <td>{{ $item->status }}</td>
                    <td><p>{!! $item->description !!}</p></td>
                    <td><a href="{{ route('admin.editProfile',['id'=> $item->id ]) }}" class="btn btn-info" title="">@lang('profilelang.edit')</a></td>
                    <td><button  id="profile-{{ $item->id }}" class="btn btn-danger btn-delete-profile" title="" data-id="{{ $item->id }}">@lang('profilelang.delete')</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-12">
        {{ $info->appends(request()->query())->links() }}
        <!-- ket hop cac phan trang voi tim kiem -->
    </div>
  </div>
</div>
@endsection


<!-- JavaScrips -->
@push('javascript')
    <script type="text/javascript">

        // bat su kien click nut Search
        // 
        $('#btnSearch').click(function(){
            // lay keyword ng dung nhap vao
            let keyword = $('#txtSearch').val().trim();
            //alert(keyword);
            if(keyword.length > 0){
                window.location.href = "{{ route('admin.profile') }}" + "?keyword=" +keyword;
                // hien thi tu khoa tim kiem tren url
            }
        });

        //
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // Viet ajax o day
        // 
        // Bat sk cho nut btn
            $('.btn-delete-profile').click(function(){
                // can lay duoc id tuong ung cua profile
                let idProfile = $(this).attr('data-id');
                idProfile = Number.parseInt(idProfile); // ep ve so
                //alert(idProfile);
                if(Number.isInteger(idProfile) && idProfile > 0){
                    //alert('oke');
                    $.ajax({
                        url : "{{ route('admin.deleteProfile') }}",
                        type : "POST",
                        data : {idProfile: idProfile},
                        beforeSend : function(){
                            $('#profile-'+idProfile).text('Loading....');
                        },
                        success : function(data){
                            $('#profile-'+idProfile).text('Delete');
                            if(data.mess === 'Oke'){
                                alert('Success');
                                window.location.reload(true);
                            } else {
                                alert('Fail');
                                return false;
                            }
                        },
                    });
                }
            });
        });
    </script>
@endpush










