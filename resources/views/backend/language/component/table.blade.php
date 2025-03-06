<table class="table table-bordered table-stripped">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox"/>

        </th>
        <th style="width: 100px;">Ảnh đại diện</th>

        <th>Tên ngôn ngữ</th>
        <th class="text-center">Canonical</th>

        <th class="text-center">Mô tả</th>
        <th class="text-center">Trạng thái</th>
        <th class="text-center">Thao tác</th>

    </tr>
    </thead>
    <tbody>        
        @if (isset($languages) && is_object($languages))
        @foreach ($languages as $language)
    <tr >
        <td>
            <input type="checkbox" value="{{$language->id}}" class="input-checkbox checkBoxItem"/>
        </td>
        <td>
            <span class="image img-cover"><img src="{{$language->image}}" alt=""></span>
        </td>
        <td>
            <div class="info-item name">{{$language->name}}</div>
        </td>
        <td>
            <div class="info-item name">{{$language->canonical}}</div>
        </td>
        <td>
            <div class="info-item name">{{$language->description}}</div>
        </td>
        <td class="text-center js-switch-{{$language->id}}">
            <input type="checkbox" value="{{$language->publish}}" class="js-switch
            status " data-field="publish" data-model="UserCatalogue" {{
                ($language->publish == 2) ? 'checked' : ''
            }} data-modelId="{{$language->id}}" />
        </td>
        <td class="text-center">
            <a href="{{route('language.edit',$language->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
            <a href="{{route('language.delete', $language->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
{{$languages ->links('pagination::bootstrap-4')}}

