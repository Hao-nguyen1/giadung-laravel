@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
<form action="{{route('user.store')}}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>Nhập thông tin chung của người sử dụng</p>
                        <p>Luư ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="text" 
                                    name="email" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ và tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="text" 
                                    name="name" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 

                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm thành viên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="user_catalogue_id" class="form-control">
                                        <option value="0">[Chọn nhóm thành viên]</option>
                                        <option value="1">Quản trị viên</option>
                                        <option value="2">Cộng tác viên</option>
                                        <option value="3">Chọn nhóm thành viên</option>
                                        
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày sinh
                                    </label>
                                    <input 
                                    type="text" 
                                    name="birthday" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 

                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="password" 
                                    name="password" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập lại mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                    type="password" 
                                    name="re_password" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin liên hệ</div>
                    <div class="panel-description">
                        <p>Nhập thông tin liên hệ của người dùng</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Thành phố
                                    </label>
                                    <select name="province_id" class="form-control setupSelect2 province location" data-target="districts">
                                        <option value="0">[Chọn thành phố]</option>
                                        @if (isset($provinces))
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                        @endif                                        
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Quận/Huyện
                                    </label>
                                    <select name="district_id" class="form-control districts setupSelect2 location" data-target="wards">
                                        <option value="0">[Chọn Quận/huyện]</option>

                                        
                                    </select>
                                </div>
                            </div> 

                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phường/xã
                                    </label>
                                    <select name="ward_id" class="form-control wards setupSelect2">
                                        <option value="0">[Chọn phường xã]</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Địa chỉ
                                    </label>
                                    <input 
                                    type="text" 
                                    name="address" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 

                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Số điện thoại
                                    </label>
                                    <input 
                                    type="text" 
                                    name="phone" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
                                </div>
                            </div> 
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi chú
                                    </label>
                                    <input 
                                    type="text" 
                                    name="description" 
                                    class="form-control"
                                    autocomplete="off"
                                    >
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