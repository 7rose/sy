@extends('nav')

@section('content')

<div class="top-pad"></div>
<section id="section-contact-info">
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="carousel slide me">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="slider-caption ">
                                <h2 class="big-title wow slideInLeft">{{ Auth::user()->name }}</h2>
                                    <p><span class="fa fa-phone" aria-hidden="true"></span> {{ Auth::user()->mobile }}</p>
                                    <p class="wow slideInRight">欢迎您使用本系统!</p>
                                    <a href="/products" class="btn btn-primary white"><span class="fa fa-diamond" aria-hidden="true"></span> 产品</a>
                                    <a href="/me" class="btn btn-primary white"><span class="fa fa-home" aria-hidden="true"></span>  用户中心</a>
                                </div>
                            </div> <!-- item end -->
                        </div>
                    </div> <!-- carousel slider wrapper -->
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
    <table class="table table-striped">
        <caption><span class="fa fa-jpy" aria-hidden="true"></span> 出金入金: {{ Auth::user()->name }}</caption>
        <thead>
            <tr>
                <th>金额</th>
                <th>流向</th>
                <th>经办人</th>
                <th>状态</th>
                <th>日期</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>入</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>出</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>2020-5-5 12:12:11</td>
                <td>#560001</td>
            </tr>
        </tbody>
    </table>
    </div>
</section>

@endsection
