@extends('nav')

@section('content')

<div class="top-pad"></div>
<section id="section-contact-info">
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default panel-sm">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                @isset($icon)
                                <i class="icon-{{ $icon }}"></i>
                                @endisset

                                @isset($title)
                                    {{ $title }}
                                @endisset

                            </h3>
                        </div>
                        <div class="panel-body">
                            {!! form($form) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
