@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
<form action="" method="" class="box">

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">Nhập thông tin chung của người sử dụng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Email
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
                                    <label for="" class="control-label text-right">Họ và tên
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Nhóm thành viên
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
                                    <label for="" class="control-label text-right">Ngày sinh
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>