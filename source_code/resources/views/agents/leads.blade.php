@extends('layouts.agents.page')
@section('content')
<?php 
$arrStatus  = array('Y'=>'Existing Member','N'=>'New Member');
?>
<style type="text/css">
.img-wrap {
    position: relative;    
}
.img-wrap .close {
    position: absolute;
    top: 0px;
    right: 25px;
    z-index: 100;   
    opacity: 1;
}
  .error_input
  {
    border-color:#D31E2B !important;
  }
  .error
  {
    border: none;
    color: #d9534f;    
    font-size: 13px;
  }
  
</style>
<link rel="stylesheet" href="{{ URL::asset('agents/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage Leads<small></small> </h1>
      <ol class="breadcrumb">
        <li><a href="{{URL('/agent')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Leads</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-xs-12">
          <!-- Horizontal Form -->
          <div class="box">
            @if ($errors->any())                
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                        
            @endif
            @if(session('messagelo'))
            <div class="alert alert-success">{{session('messagelo')}} </div>  
            @endif
            
            @if(session('message'))
            <div class="alert alert-danger">{{session('message')}} </div>  
            @endif
            <div class="box-header">
              <h3 class="box-title">Leads</h3>
              <div class="col-sm-4" style="float: right; padding-right: 20px; text-align: right;">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Full Name</th>
                  <th>Email Address</th>
                  <th>Phone</th>
                  <th>Home Sq. Area</th>
                  <th>Created On</th>
                  <th>View</th>
                </tr>
                </thead>
                <tbody>                
                @if(!$arrLeads->isEmpty())
                @foreach($arrLeads as $key => $value)
                <?php $inc          = $key+1; ?>
                <?php //$slno         = (($arrLeads->currentPage()-1)*$arrLeads->perPage())+$inc;?>
                <tr id="row{{$value->id}}">
                  <td style="text-align: center;">{{$inc}}</td>
                  <td>{{$value->first_name}}&nbsp;{{$value->last_name}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->phone}}</td>
                  <td>{{$value->home_area}}</td>
                  <td><?php echo date('d M Y H:i:s', strtotime($value->created_at));?></td>
                  <td style="text-align: center;" id="col{{$value->id}}">
                  <a title="Detail View" style="cursor: pointer;" data-id="{{ $value->id }}" 
                    data-toggle="modal" data-target="#largeModal" class="detview" >  
                    <i class="fa fa-search" aria-hidden="true"></i>            
                  </a>
                              
                  </td>
                </tr>
                
                @endforeach 
                

                @else
                <tr><td colspan="7" style="text-align: center;">Sorry.. No records available!!.. </td></tr>
                @endif 
                
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        
        
      </div>


      

    </section>
  </div>


  <div class="modal fade" id="largeModal" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" id="modal_content">
        
      </div>
    </div>
  </div>

@endsection
@push('scripts')
  <script src="{{ URL::asset('agents/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::asset('agents/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">  -->

  <script>
    $(function () {
      $('#example1').DataTable({
        // dom: 'Bfrtip',
        /*buttons: ['csv', 'pdf'],*/
        /*buttons:[
                {
                  extend: 'pdfHtml5',
                  footer: 'true',
                  text: 'PDF',
                  //orientation: 'landscape',
                  pageSize: 'A1',
                  title:'Report PDF',  
                },
                {
                  extend: 'csvHtml5',
                  footer: 'true',
                  text: 'CSV',              
                  title:'Report CSV',  
                },*/
                /*{
                  extend: 'print',
                  footer: 'true',
                  text: 'PRINT',
                  orientation: 'landscape',
                  pageSize: 'A0',
                  title:'Lead Print Report ',
                  customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .css('page-size','A0');
                        
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                  }
                },  */              
        /*],
        searching: false,*/
      })      
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function (){        

        $('.detview').click(function(){
            var id      = $(this).data("id");
            $.ajax(
                    {                            
                        url         : '/leads/detail_view/'+id,
                        type        : 'GET',  
                        async       : true,                          
                        data        : '',   

                        success:function(dat)
                        {   
                            if(dat)
                            { 
                                $('#modal_content').html(dat);
                            }
                        },                            
                    });
        });
      });
</script>
@endpush