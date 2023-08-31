@extends('layouts.admin')

@section('content')

<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="display: flex !important; max-width: 99.333% !important; margin-left: 2px !important;
padding: 0 16px ! important;" @else style="display: flex !important; max-width: 99.333% !important; margin-right: 2px !important;
padding: 0 16px ! important;" @endif >

        <div class="row layout-top-spacing">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: brown">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('REG USERS')}}</h5>
                    <p class="inv-balance" style="color: white">{{$user->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.users')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: rgb(23, 97, 62)">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('LISTED VEHICLES')}}</h5>
                    <p class="inv-balance" style="color: white">{{$car->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.Vehicles.show')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: blueviolet">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('TOTAL BOOKINGS')}}</h5>
                    <p class="inv-balance" style="color: white">{{$book->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.books')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: chocolate">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('LISTED BRANDS')}}</h5>
                    <p class="inv-balance" style="color: white">{{$brand->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.brand.show')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: crimson">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('LISTED SUBSCIBERS')}}</h5>
                    <p class="inv-balance" style="color: white">{{$subs->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.subscribers')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: darkmagenta">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('LISTED CONTACT')}}</h5>
                    <p class="inv-balance" style="color: white">{{$contact->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.contact')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-account-invoice-two" style="background-color: goldenrod">
        <div class="widget-content">
            <div class="account-box" >
                <div class="info" >
                    <h5 class="" style="color: white">{{__('LISTED TESTIMONIALS')}}</h5>
                    <p class="inv-balance" style="color: white">{{$test->count()}}</p>
                </div>
                <div class="acc-action">

                    <a style="color: white" href="{{route('admin.testimonials')}}">{{__('View Details.')}}</a>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection