<?php 
$arrStatus  	= array('P'=>'Verification Pending','V'=>'Verified','D'=>'Duplicate',
						'S'=>'Sold','T'=>'Deleted','I'=>'Incomplete');
?>            
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title">{{$arrLead->first_name}}&nbsp;{{$arrLead->last_name}}</h4>
</div>
<div class="modal-body">
  <table class="table table-bordered table-hover">
	<tr>
		<td style="width: 20%;">
			<label for="inputName" class=" control-label">Firstname</label></td>
		<td style="width: 30%;">{{$arrLead->first_name}}</td>
		<td style="width: 20%;">
			<label for="inputName" class="control-label">Lastname</label></td>
		<td style="width: 30%;">{{$arrLead->last_name}}</td>
	</tr>
	<tr>
		<td style="width: 20%;"><label for="inputName" class="control-label">Email Address</label></td>
		<td style="width: 30%;">{{$arrLead->email}}</td>
		<td style="width: 20%;"><label for="inputName" class="control-label">Phone Number</label></td>
		<td style="width: 30%;">{{$arrLead->phone}}</td>
	</tr>
	<tr>
		<td style="width: 20%;"><label for="inputName" class=" control-label">Home square area</label></td>
		<td style="width: 30%;">{{$arrLead->home_area}}</td>
		<td style="width: 20%;"><label for="inputName" class="control-label">Address</label></td>
		<td style="width: 30%;">{{$arrLead->address}}</td>
	</tr>
	<tr>
		<td style="width: 20%;"><label for="inputName" class=" control-label">IP Address</label></td>
		<td style="width: 30%;">{{$arrLead->ip_address}}</td>
		<td style="width: 20%;"><label for="inputName" class="control-label">Campaign  ID</label></td>
		<td style="width: 30%;">{{$arrLead->camp_id}}</td>
	</tr>
	<tr>
		<td style="width: 20%;"><label for="inputName" class="control-label">Date Of Registration</label></td>
		<td style="width: 30%;">{{date('d-m-Y H:i:s', strtotime($arrLead->created_at))}}</td>
		<td style="width: 20%;"><label for="inputName" class="control-label">Lead&nbsp;Status</label></td>
		<td style="width: 30%;">{{$arrStatus[$arrLead->status]}}</td>
	</tr>	
</table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
</div>


                
              
