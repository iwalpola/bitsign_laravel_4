 <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="dashboard">Dashboard</a></li>
			<li><a href="#">Contracts</a></li>
			<li><a href="#">New Contract</a></li>
			<li><a href="#">Files</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil"></i>
					<span>Create a New Contract - Step 2</span>
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
				<h4 class="page-header">Add files that you want to be part of this contract</h4>
				  <form enctype="multipart/form-data" accept-charset="UTF-8" action="{{ url('server/handleUploads') }}" method="POST">

				    <input type="hidden" value="<?php echo csrf_token(); ?>" name="_token"></input>
				    <input type="hidden" value="{{$contract_id}}" name="contract_id"></input>
				    <label id="" class="" for="file">

				        File

				    </label>
				    <input id="file" type="file" name="file"></input>
				    <br></br>
				    <!--

				     submit buttons 

				    -->
				    <input type="submit" value="Upload"></input>
				    <!--

				     reset buttons 

				    -->
				    <input type="reset" value="Reset"></input>

				</form>
				</div>
		</div>
	</div>
</div>