@if (Session::get('contractid') == NULL)
	    	<div class="alert alert-warning">
	    	You cannot create a signature without a valid contact id. Please start over. <br>
	    	</div>
@endif

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">My BitSign</a></li>
			<li><a href="#">Signatures</a></li>
			<li><a href="#">My Signatures</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-file-zip-o"></i>
					<span>Add Signees to your Contract</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<form class="form-horizontal" role="form" method="post" action="signatures/usercheck" id="form-add-a-user-email">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="email">Search by email:</label>
						<div class="col-sm-10">
								<input type="text" class="form-control" name="email" id="email"/>
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<button type="submit" class="btn btn-primary btn-label-left btn-block">
							<span><i class="fa fa-search"></i></span>
								Search/Add
							</button>
						</div>
					</div>
				</form>
				<form class="form-horizontal" role="form" method="post" action="signatures/usercheck" id="form-add-a-user-btc">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="btc_addr">Search by Bitcoin Address:</label>
						<div class="col-sm-10">
								<input type="text" class="form-control" name="btc_addr" id="btc_addr"/>
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<button type="submit" class="btn btn-primary btn-label-left btn-block">
							<span><i class="fa fa-search"></i></span>
								Search/Add
							</button>
						</div>
					</div>
				</form>
				<table class="table table-bordered table-striped table-hover table-heading" id="signature-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>Signee Name</th>
							<th>Email</th>
							<th>Bitcoin Address</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
						
					<!-- End: list_row -->
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Signee Name</th>
							<th>Email</th>
							<th>Bitcoin Address</th>
							<th>Delete</th>
						</tr>
					</tfoot>
				</table>
				<form class="form-horizontal" role="form" method="post" action="signatures" id="form-add-signees">
					<div class="form-group">
						<div class="col-sm-10">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<input type="hidden" name="contract_id" value={{Session::get('contractid')}}>
								<button type="submit" class="btn btn-primary btn-label-left btn-block">
							<span><i class="fa fa-save"></i></span>
								Save Signees
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function() {

	//varible for incrementing row id
	var i = 1;
	
	    $('#form-add-a-user-email').on('submit', function(){ 
                 
       // ajax post method to pass form data to the server and check existance of user
		        $.post(
		            $(this).prop('action'),
		            {
		                "email": $( this ).find( 'input[name=email]' ).val(),
		                "_token": $( this ).find( 'input[name=_token]' ).val()
		            },
		            function(data){
		            	if	(data["match"]=='true') {
						    //addRow(data, #signature_table)
						} 
		            },
		            'json'
		        ); 
		       
		        return false;
		    }); 

	    $('#form-add-a-user-btc').on('submit', function(){ 
                 
       // ajax post method to pass form data to the server and check existance of user
		        $.post(
		            $(this).prop('action'),
		            {
		                "btc_addr": $( this ).find( 'input[name=btc_addr]' ).val(),
		                "_token": $( this ).find( 'input[name=_token]' ).val()
		            },
		            function(data){
		            	if	(data["match"]=='true') {
						    //addRow(data, #signature_table);
						    //i++;
						}
		            },
		            'json'
		        ); 
		       
		        return false;
		    });

	    $('#form-add-signees').on('submit', function(){ 
                 
       // ajax post method to pass form data to the server and check existance of user
		        $.post(
		            $(this).prop('action'),
		            {
		                //collect list of emails from table and post as json array, include contract_id hidden input
		            },
		            function(data){
		            	//redirect to success page 
		            },
		            'json'
		        ); 
		       
		        return false;
		    }); 

	    //function addRow(data, table){
	    		//add a row to the table
						    //<tr>
						    //<td>i</td>
							//<td>data["name"]</td>
							//<td>data[email]</td>
							//<td>data["btc"]</td>
							//<td>"<INPUT TYPE=\"Button\" CLASS=\"Button\" onClick=\"delRow(i)\" VALUE=\"Delete Row\">"</td>
							//<td>CoinCorp Ltd, Isuru Walpola</td>
							//<td>Verify Now</td>
							//</tr>
			//}

			//function deleteRow(id){
					//code to delete row where id is id
				//}
});
</script>						