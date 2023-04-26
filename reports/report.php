<?php include '../common.php'; ?>
<?php include '../db_conf.php'; ?>

<html>
<title>Enquiry Report</title>
<link rel="shortcut icon" href="" type="image/x-icon">
<head>
	<link href="css/bootstrap.css" rel="stylesheet" />      
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet" />
	<link href="css/custom.css" rel="stylesheet" />       
	 <script src="./../js/jquery.min.js" type="text/javascript"></script>
	<!-- <script src="js/jQuery.js" type="text/javascript"></script> -->
	<!-- <script src="js/moment-with-locales.js" type="text/
		javascript"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
	<script src="./../js/bootstrap.min.js" type="text/javascript"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>	
	<script src="js/jquery.table2excel.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">		
			<div class="col-sm-12 form-container form-horizontal">
				<?php //print_r($_POST); ?>
				<form name="enquiry_report_frm" id="enquiry_report_frm" method="POST" action="" data-toggle="validator">
					<input type="hidden" name="frm_submit" id="frm_submit" value="true">
					<div class="form-group">
						<div class="col-sm-2"><label>Enquiry Type *</label></div>
						<div class="col-sm-10">
							<select class="form-control" name="enquiry" id="enquiry">
								<option value="none">Enquiry Type</option>
								<option value='apply' <?php echo (($_POST['enquiry']=="apply")?"selected":"");?>>Apply</option>
								<option value='contact'  <?php echo (($_POST['enquiry']=="contact")?"selected":"");?>>Contact Us</option>
								<option value='course'  <?php echo (($_POST['enquiry']=="course")?"selected":"");?>>Course</option>
								<option value='scholarship'  <?php echo (($_POST['enquiry']=="scholarship")?"selected":"");?>>Scholarship</option>
							</select>	
							<span style="color: red;" id="enquiry_name_error"></span>						
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label>Dates *</label></div>                            
						<div class="col-sm-5">					 	 
							<input type="text" class="form-control" name="from_date" id="from_date" placeholder="From Date" value="<?php echo !empty($_POST['from_date'])?$_POST['from_date']:'2020-01-09';  ?>">

						</div>
						<span style="color: red;" id="from_date_error"></span>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="to_date" id="to_date" placeholder="To Date" value="<?php echo !empty($_POST['to_date'])?$_POST['to_date']:'2020-01-09';  ?>">
							<span style="color: red;" id="to_date_error"></span>
						</div>
						<span style="color: red;" id="to_date_error"></span>
					</div>
				</form>
				<div class="form-group">
					<div class="col-sm-12 text-center">						
						<button type="button" class="btn btn-primary btn-flat margin-top" onclick="validation_form()">Submit</button>&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-flat margin-top" id="export_btn">Export</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row result" style="overflow-x:auto;max-height: 650px;">
			<?php 

			if(!empty($_POST['enquiry'])){ 
				$tablename=$_POST['enquiry']."_form_submits";           			
				$q = $connect->prepare("DESCRIBE ".$tablename);
				$q->execute();
				$org_fields = $q->fetchAll(PDO::FETCH_COLUMN);
					$exclude_array=array();
				//$exclude_array=array('device_info','utm_campaign','utm_medium','utm_source','utm_content','utm_term','query','api_response','gclid');
				$table_fields=array_diff($org_fields,$exclude_array);
				$where="where 1";
				if(!empty($_POST['from_date']) && !empty($_POST['to_date'])){
					$where.=' and submit_time >= CAST("'.$_POST['from_date'].'" as date) AND submit_time <= cast("'.$_POST['to_date'].'" as date)';
				}
            			//echo "SELECT * FROM $tablename $where";
				$table_rows= $connect->query("SELECT * FROM $tablename $where");
				
				if($table_rows->rowCount() > 0):
				?>
				<table class="table MainContainer">
					<thead>
						<?php 
						foreach ($table_fields as $col) {?>
							<th><?php echo $col;?></th>
						<?php }
						?>
					</thead>
					<tbody>
						<?php 
						foreach ($table_rows as $row)
						{
							?><tr><?php
							foreach ($table_fields as $col) {?>
								<td><?php echo $row[$col];?></td>
							<?php }
							?></tr> <?php
						}
						?>
					</tbody>
				</table>
				<?php
				else: ?>
					<table class="table MainContainer">
						<tbody><tr><td> <h3>No Records Found</h3></td></tr></tbody>
					</table>
				<?php endif;

			}
			?>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">

	$( "#enquiry" ).change(function() {
		var project_name = $("#enquiry").val();
		if(project_name == "none"){
			$("#enquiry_name_error").text("This is required field.");
		}else{
			$("#enquiry_name_error").text('');		
		}
	});

	function validation_form(){

		var enquiry = $("#enquiry").val();
		var from_date = $("#from_date").val();
		var to_date = $("#to_date").val();
		if(enquiry == "none"){
			$("#enquiry_name_error").text("This is required field.");
			return;
		}
		if(from_date == ""){
			$("#from_date_error").text("This is required field.");
		}else if(to_date == ""){
			$("#to_date_error").text("This is required field.");
		}else{
			$("#enquiry_name_error").text('');
			$("#enquiry_report_frm").submit();
		}
	}

	jQuery(document).ready(function(){
		var todayDate = new Date().getDate();

		var mdate = todayDate - 1;
		var fdate,tdate;    
		//$('#from_date').datetimepicker({format : 'YYYY-MM-DD'});
            var dtstr = $("#from_date").val();
            var tstr = $("#to_date").val();
        fdate = new Date(dtstr.split("-").reverse().join("-")).getTime();
        tdate = new Date(tstr.split("-").reverse().join("-")).getTime();

    $('#from_date').datetimepicker({
		format : 'YYYY-MM-DD',
        
	});    
    $('#to_date').datetimepicker({
		format : 'YYYY-MM-DD',
      
	});
    $("#from_date").on("dp.change", function (e) {
        $('#to_date').data("DateTimePicker").minDate(e.date);        
    });

 $("#export_btn").click(function(){
 	var name=jQuery('#enquiry').val();
 	$(".MainContainer").table2excel({
 		exclude: ".noExl",
 		name: "Excel Document Name",
 		filename: name.charAt(0).toUpperCase() + name.slice(1)+"_Report",
 		fileext: ".xls",
 		exclude_img: true,
 		exclude_links: true,
 		exclude_inputs: true
 	});
 });

});
</script>		
