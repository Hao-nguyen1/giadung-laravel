<table class="table table-bordered table-stripped">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox"/>

        </th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th class="text-center">Trạng thái</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>        
        @if (isset($users) && is_object($users))
        @foreach ($users as $user)
            

    <tr>
        <td>
            <input type="checkbox" value="" class="input-checkbox checkBoxItem"/>
        </td>

        <td>
            <div class="info-item name">{{$user->name}}</div>
        </td>
        <td>
            <div class="info-item email">{{$user->email}}</div>
        </td>
        <td>
            <div class="info-item phone">{{$user->phone}}</div>
        </td>
        <td>
            <div class="address-item name">{{$user->address}}</div>
        </td>
        <td class="text-center">
            <input type="checkbox" class="js-switch" checked />
        </td>
        <td class="text-center">
            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
{{$users ->links('pagination::bootstrap-4')}}

{{-- <script>
    $(document).ready(function () {
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {color: '#1AB394'});
    });
</script> --}}