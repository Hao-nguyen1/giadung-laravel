@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled mb0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@php
$url = ($config['method'] == 'create') ? route('language.store') : route('language.update', $language->id);
@endphp
<form action="{{ $url }}" method="post" class="box" enctype="multipart/form-data">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-canonical">
                        <p>Nhập thông tin chung của ngôn ngữ</p>
                        <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Tên ngôn ngữ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="text" 
                                    name="name" 
                                    value="{{ old('name', ($language->name) ?? '') }}"
                                    class="form-control"
                                    autocomplete="off"
                                    placeholder="">
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Canonical
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="text" 
                                    name="canonical" 
                                    value="{{ old('canonical', ($language->canonical) ?? '') }}"
                                    class="form-control"
                                    autocomplete="off">
                                </div>
                            </div> 
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ảnh đại diện
                                    </label>
                                    <input 
                                    type="text" 
                                    name="image" 
                                    value="{{ old('image', ($language->image) ?? '') }}"
                                    class="form-control upload-image"
                                    autocomplete="off"
                                    placeholder="">
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi chú
                                    </label>
                                    <input 
                                    type="text" 
                                    name="description" 
                                    value="{{ old('canonical', ($language->description) ?? '') }}"
                                    class="form-control"
                                    autocomplete="off">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="Send">Lưu lại</button>
        </div>
    </div>
</form>
