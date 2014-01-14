<?php include ("_header.php"); 
	  include ("_navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://silviomoreto.github.io/bootstrap-select/stylesheets/bootstrap-select.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="text-center">展館搜尋</div>
			</div>
			
			<div class="span10">
				<div id="searching">
				<!-- <div class="searching" style="display:none"> -->
				<form class="form-search" action="<?=site_url("display/search_result")?>" method="post">
					<input type="text" class="form-control" placeholder="請輸入搜尋內容" name="SearchText" />
					
					<select class="selectpicker show-tick" name="SearchType">
						<option value="Description">館名</option>
						<option value="Curator">館長名</option>
					</select>
					
					<button type="submit" class="btn btn-primary">
						<i class="icon-search icon-white"></i> 搜尋
					</button>
					
				</form>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span2">	
			</div>
			
			<div class="span10">
			<?php if( isset($data['id']) ){
					if($data['id'] != -1){?>
						<table class="table table-striped">
							<tr>
								<td><strong>編號</strong></td>
								<td><strong>館名</strong></td>
								<td><strong>館長</strong></td>
							</tr>
							<?php foreach ($data['id'] as $element):?>
							<tr>
								<td><?php echo $element->Building_id;?></td>
								<td><?php echo $element->Description;?></td>
								<td><?php echo $element->Zookeeper_name;?></td>
							</tr>
						<?php endforeach; ?>
					</table>
					<?php }else{?>
								<table class="table table-striped">
									<tr>
										<td><strong>抱歉，您搜尋的內容不存在，請確認是否選對搜尋類別!</strong></td>
									</tr>
								</table>
				<?php }
				}?>			
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span2">
				<div class="text-center">
					<div class="panel-group" id="accordion">
  						<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        						<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        						展館一覽表</button>
      							</h4>
    						</div>
    						
    						<div id="collapseOne" class="panel-collapse collapse">
      						<div class="panel-body">
      							<?php if( isset($data['building']) ){?>
								<table class="table table-striped">
									<?php foreach ($data['building'] as $element):?>
									<tr>
										<td><?php echo $element->Description;?></td>
									</tr>
									<?php endforeach; ?>
								</table>
								<?php }?>
      						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(e) {
              $('.selectpicker').selectpicker();
        });
    </script>
    <script language="JavaScript">
		function setVisibility(id, visibility) {
			document.getElementById(id).style.display = visibility;
		}
	</script>
</body>