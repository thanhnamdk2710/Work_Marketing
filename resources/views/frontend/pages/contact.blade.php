@extends('frontend.layouts.master')

@section('title')
    Liên hệ || {{ Session::get('shop')->name }}
@endsection

@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liên hệ <strong>Chúng tôi</strong></h2>
                    <div id="gmap" class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6447.679730573872!2d108.16785283399618!3d16.075174987988873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6c4a6ab4b%3A0xd8f4dccd94568389!2zMjMgUGh1zIEgTMO0zKNjIDcsIEjDsmEgTWluaCwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1527521055951" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên lạc</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        {{ Form::open(['route' => 'sendContact', 'method' => 'POST']) }}
                        <div class="form-group col-md-6">
                            {{ Form::text('name', '', ['class' => 'form-control', 'required', 'placeholder' => 'Tên']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::email('email', '', ['class' => 'form-control', 'required', 'placeholder' => 'Email']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {{ Form::text('subject', '', ['class' => 'form-control', 'required', 'placeholder' => 'Tiêu đề']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {{ Form::textarea('message', '', ['class' => 'form-control', 'id'=> 'message', 'required', 'placeholder' => 'Nhập nội dung tại đây']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {{ Form::submit('Gửi', ['class' => 'btn btn-primary pull-right']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Thông tin liên lạc</h2>
                        <address>
                            <p>Cửa hàng E-Shopper.</p>
                            <p>Địa chỉ: Số 23 Phú Lộc 7, phường Hoà Minh, quận Liên Chiểu, thành phố Đà Nẵng</p>
                            <p>Điện thoại: 01634366133</p>
                            <p>Email: thanhnamdk2710@gmail.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Mạng xã hội</h2>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/hien.tai.9889" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/1/105104695591099886297" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCvbPoj1E48V_FAPhRGBVjxQ" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection