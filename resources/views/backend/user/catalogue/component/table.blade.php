<table class="table table-bordered table-stripped">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox"/>

        </th>
        <th>Tên Nhóm thành Viên</th>
        <th class="text-center">Số thành Viên</th>
        <th class="text-center">Mô tả</th>
        <th class="text-center">Trạng thái</th>
        <th class="text-center">Thao tác</th>

    </tr>
    </thead>
    <tbody>        
        @if (isset($userCatalogues) && is_object($userCatalogues))
        @foreach ($userCatalogues as $userCatalogue)
    <tr >
        <td>
            <input type="checkbox" value="{{$userCatalogue->id}}" class="input-checkbox checkBoxItem"/>
        </td>

        <td>
            <div class="info-item name">{{$userCatalogue->name}}</div>
        </td>
        <td class="text-center">
            <div class="info-item name">{{$userCatalogue->users_count}} người</div>
        </td>
        <td>
            <div class="info-item name">{{$userCatalogue->description}}</div>
        </td>
        <td class="text-center js-switch-{{$userCatalogue->id}}">
            <input type="checkbox" value="{{$userCatalogue->publish}}" class="js-switch
            status " data-field="publish" data-model="UserCatalogue" {{
                ($userCatalogue->publish == 2) ? 'checked' : ''
            }} data-modelId="{{$userCatalogue->id}}" />
        </td>
        <td class="text-center">
            <a href="{{route('user.catalogue.edit',$userCatalogue->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
            <a href="{{route('user.catalogue.delete', $userCatalogue->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
{{$userCatalogues ->links('pagination::bootstrap-4')}}

