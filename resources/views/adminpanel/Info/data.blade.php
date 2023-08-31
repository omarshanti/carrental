@extends('layouts.admin')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')

<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="display: flex !important; max-width: 99.333% !important; margin-left: 2px !important;
  padding: 0 16px ! important;" @else style="display: flex !important; max-width: 99.333% !important; margin-right: 2px !important;
  padding: 0 16px ! important;" @endif >

  <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{__('MANAGE SITE PAGES')}}</h4>
                </div>                       
            </div>
        </div>
        <br>
        <div class="widget-content widget-content-area" >
            <div class="table-responsive" >
              <div style="margin-right: 20px">
                <form method="post" action="{{route('admin.post.about',['id'=>$about->id])}}">
                    @csrf
                    <h5>{{__('Update About Us')}}</h5>
                    <br>
                    <br>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                    </ul>
                     </div>
                     @endif
              
                     {{__('Deatils In English')}}:
                    <div class="form-row mb-4">
                
                        <div class="col">
                          <input id="x" type="hidden" name="d_en">
                          <trix-editor input="x" placeholder="{{__('English  Deatils')}}">{{$about->detail}}</trix-editor>
                        </div>
                      </div>
                      {{__('Deatils In Arabic')}}:
                      <div class="form-row mb-4">
                
                        <div class="col">
                          <input id="g" type="hidden" name="d_ar">
                          <trix-editor input="g" placeholder="{{__('Arabic  Deatils')}}">{{$about->detail_ar}}</trix-editor>
                        </div>
                          
                        </div>
                      </div>
                      <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
                </form>
              </div>
              <div style="margin-right: 20px">
              <form method="post" action="{{route('admin.post.faqs',['id'=>$faqs->id])}}">
                  @csrf
                  <h5>{{__('Update FQAs')}}</h5>
                  <br>
                  <br>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
                  </ul>
                   </div>
                   @endif
              
                   {{__('Deatils In English')}}:
                  <div class="form-row mb-4">
              
                      <div class="col">
                        <input id="f" type="hidden" name="d_en">
                          <trix-editor input="f" placeholder="{{__('English  Deatils')}}">{{$faqs->detail}}</trix-editor>
                      </div>
                    </div>
                    {{__('Deatils In Arabic')}}:
                    <div class="form-row mb-4">
              
                      <div class="col">
                        <input id="m" type="hidden" name="d_ar">
                          <trix-editor input="m" placeholder="{{__('Arabic  Deatils')}}">{{$faqs->detail_ar}}</trix-editor>
                      </div>
                    </div>
                    <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
              </form>
              </div>
              <div style="margin-right: 20px">
              <form method="post" action="{{route('admin.post.privacy',['id'=>$privacy->id])}}">
                @csrf
                <h5>{{__('Update Privacy Policy')}}</h5>
                <br>
                <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
                </ul>
                 </div>
                 @endif
              
                 {{__('Deatils In English')}}:
                <div class="form-row mb-4">
              
                    <div class="col">
                      <input id="a" type="hidden" name="d_en">
                      <trix-editor input="a" placeholder="{{__('English  Deatils')}}">{{$privacy->detail}}</trix-editor>
                    </div>
                  </div>
                  {{__('Deatils In Arabic')}}:
                  <div class="form-row mb-4">
              
                    <div class="col">
                      <input id="v" type="hidden" name="d_ar">
                      <trix-editor input="v" placeholder="{{__('Arabic  Deatils')}}">{{$privacy->detail_ar}}</trix-editor>
                    </div>
                  </div>
                  <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
              </form>
              </div>
              <div style="margin-right: 20px">
              <form method="post" action="{{route('admin.post.terms',['id'=>$terms->id])}}">
                @csrf
                <h5>{{__('Update Terms and Conditions')}}</h5>
                <br>
                <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
                </ul>
                 </div>
                 @endif
              
                 {{__('Deatils In English')}}:
                <div class="form-row mb-4">
              
                    <div class="col">
                      <input id="r" type="hidden" name="d_en">
                      <trix-editor input="r" placeholder="{{__('Arabic  Deatils')}}">{{$privacy->detail_ar}}</trix-editor>

                    </div>
                  </div>
                  {{__('Deatils In Arabic')}}:
                  <div class="form-row mb-4">
              
                    <div class="col">
                      <input id="j" type="hidden" name="d_ar">
                      <trix-editor input="j" placeholder="{{__('English  Deatils')}}">{{$privacy->detail_ar}}</trix-editor>
                    </div>
                  </div>
                  <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
              </form>
              </div>
        </div>
    </div>
  </div>
      
 </div>
</div>

@endsection

@section('script') 

@endsection