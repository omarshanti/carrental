@extends('layouts.admin')
@section('style')
@if(LaravelLocalization::getCurrentLocale() == 'ar')
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.rtl/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.rtl/assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.rtl/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.rtl/plugins/table/datatable/custom_dt_custom.css')}}">
<!-- END PAGE LEVEL CUSTOM STYLES -->
@else
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.ltr/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.ltr/assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.ltr/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.ltr/plugins/table/datatable/custom_dt_custom.css')}}">
<!-- END PAGE LEVEL CUSTOM STYLES -->
@endif

@endsection
<!-- END PAGE LEVEL SCRIPTS -->  
@section('content')
<div  @if(LaravelLocalization::getCurrentLocale() == 'en') class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-left: 2px !important;
  " @else class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-right: 2px !important;
  " @endif >
    <div class="layout-px-spacing" style="width: 100%"> 
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                              <h4>{{__('MANAGE TESTIMONIALS')}}</h4>
                            </div>                       
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive mb-4 mt-4">
                        
                        <table data-order='[[ 0, "desc" ]]' id="alter_pagination" class="table table-hover" style="width:100%">
                          <thead>
                            <tr>
                              <th>'#'</th>
                              <th>{{__('Name')}}</th>
                              <th>{{__('Email')}}</th>
                              <th>{{__('Testimonials')}}</th>
                              <th>{{__('Status')}}</th>
                              <th>{{__('Posting date')}}</th>
                              <th class="text-center">{{__('Action')}}</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($test as $tests)
                            <tr>
                                <td>{{$tests->id}}</td>
                                <td>{{$tests->user->name}}</td>
                                <td><div style = "width:150px; word-wrap: break-word">{{$tests->user->email}}</div></td>
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                     <td>{{$tests->Testimonial_ar}}</td>
                                    @else
                                    <td>{{$tests->Testimonial}}</td>
                                    @endif
                               
                                @if($tests->status==1)
                                <td class="text-center"><span class="badge badge-success">{{__('Active')}}</span></td>
                                @elseif($tests->status==0)
                                <td class="text-center"><span class="badge badge-dark">{{__('Inactive')}}</span></td>
                                @endif
                                <td>{{$tests->created_at}}</td>
                                <td class="text-center"  @if(LaravelLocalization::getCurrentLocale() == 'ar') style="display: flex; margin-top: 15px;margin-right: 28px;" @else style="display: flex; margin-top: 15px;margin-left: 28px;" @endif > 
                                    
                                      @if($tests->status == 0)
                                        <li style="list-style-type: none;"><a href="{{route('admin.testimonials.check',['id' => $tests->id,'status' => 1])}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                      @else  
                                        <li style="list-style-type: none;"><a href="{{route('admin.testimonials.check',['id' => $tests->id,'status' => 0])}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                      @endif  
                                    
                                </td>
                            </tr>
                          @endforeach
                          </tbody>
                            <tfoot>
                              <tr>
                                <th>'#'</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Testimonials')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Posting date')}}</th>
                                <th class="text-center">{{__('Action')}}</th>
                              </tr>
                            </tfoot>
                        </table>
                        <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="style-3_info" role="status" aria-live="polite">Showing page {{$test->currentPage()}} of {{$test->lastPage()}}</div></div><div class="col-sm-12 col-md-7">{{$test->links()}}</div></div></div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
</div>
@endsection
@section('script')
@if(LaravelLocalization::getCurrentLocale() == 'ar')
$(document).ready(function() {
    $('#alter_pagination').DataTable( {
        "paging": false,
        "info": false,   
        "pagingType": "full_numbers",
        "oLanguage": {
            "oPaginate": { 
                "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
            },
            "sinfo":  "Showing START to END of TOTAL entries",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "البحث...",
           "sLengthMenu": "النتائج:  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7 
    });
    
} );

@else
$(document).ready(function() {
    $('#alter_pagination').DataTable( {
      "paging": false,
      "info": false,  
        "pagingType": "full_numbers",
        "oLanguage": {
            "oPaginate": { 
                "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7 
    });
} );

@endif


@endsection













