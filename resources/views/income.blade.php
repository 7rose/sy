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
                                    <a href="/products" class="btn btn-primary white">产品</a>
                                    <a href="/me" class="btn btn-primary white">用户中心</a>
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
        <caption><span class="fa fa-bar-chart" aria-hidden="true"></span> 收益流水: {{ Auth::user()->name }}</caption>
        <thead>
            <tr>
                <th>金额</th>
                <th>事由</th>
                <th>经办人</th>
                <th>状态</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品1</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品2</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
            <tr>
                <td>10000</td>
                <td>产品3</td>
                <td>Tanmay</td>
                <td>ok</td>
                <td>#560001</td>
            </tr>
        </tbody>
    </table>
    </div>
</section>

@endsection
