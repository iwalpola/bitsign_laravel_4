<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="dashboard">Dashboard</a></li>
			<li><a href="#">Intellectual Property</a></li>
			<li><a href="#">Create</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil"></i>
					<span>Create a new IP Record</span>
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
			<div class="box-content">
				<h4 class="page-header">Add a Title and Description</h4>
				<form class="form-horizontal" role="form" method="post" action="ip" id="form-add-a-record">
					<label class="col-sm-1 control-label" for="contract_title">Title:</label>
					<br>
					<div class="form-group">
						<div class="col-sm-10">
								<input type="text" class="form-control" name="ip_title" id="ip_title"/>
						</div>
					</div>
					<div class="clearfix"></div>
					<label class="col-sm-5 control-label" for="ip_content">Description (supports copy paste from a word processor):</label>
					<br>
					<div class="form-group">
						<div class="col-sm-12">
								<textarea class="form-control" rows="15" name="ip_content" id="wysiwig_simple"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left btn-block">
							<span><i class="fa fa-save"></i></span>
								Save and Proceed
							</button>
						</div>
					</div>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="hidden" name="creator_id" value={{Auth::user()->id}}>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function() {
	// Create Wysiwig editor for textarea
	TinyMCEStart('#wysiwig_simple');
	tinymce.execCommand('mceRemoveEditor',true,wysiwig_simple);
	tinymce.execCommand('mceAddEditor',true,wysiwig_simple);

	    $('#form-add-a-record').on('submit', function(){ 
                 
       // ajax post method to pass form data to the 
		        $.post(
		            $(this).prop('action'),
		            {
		                "_token": $( this ).find( 'input[name=_token]' ).val(),
		                "ip_title": $( '#ip_title' ).val(),
		                "ip_descr": tinyMCE.activeEditor.getContent(),
		                "creator_id": $( this ).find( 'input[name=creator_id]' ).val()
		            },
		            function(data){
		            	var ajax_url = 'ip/import/' + data["ip_id"];
		                LoadAjaxContent(ajax_url);
		            },
		            'json'
		        ); 
		       
		        return false;
		    }); 
});
</script>						