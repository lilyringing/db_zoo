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
				<?php if($session_id){?>
					<button type="button" class="btn btn-lg btn-danger" disabled="disabled">
					欲編輯動物資訊，請先搜尋，並進入動物個別頁面</button>
				<?php }else{?>
					<div class="text-center">動物搜尋</div>
				<?php }?>
			</div>
			
			<div class="span10">
				<form class="form-search" action="<?=site_url("search/search_result")?>" method="post">
					<input type="text" class="form-control" placeholder="請輸入搜尋內容" name="SearchText" >
  					
					<select class="selectpicker show-tick" name="SearchType">
						<option value="Nickname">俗名</option>
						<option value="Building">場館</option>
						<option value="Food">食物</option>
						<option value="Native_area">分布</option>
						<option value="Kingdom">界</option>
						<option value="Phylum">門</option>
						<option value="Class">綱</option>
						<option value="Order">目</option>
						<option value="Family">科</option>
					</select>
		
					<button type="submit" class="btn btn-primary">
  						<i class="icon-search icon-white"></i> 搜尋
					</button>
		
				</form>
			</div>
		
			<div class="row-fluid">
				<div class="span2">
					<div class="text-center">搜尋結果</div>
				</div>
				<div class="span10">
					<?php if( isset($data['id'])){
							if($data['id'] != -1){?> 
								<table class="table table-striped">
									<tr>
										<td>動物名稱</td>
										<td>學名</td>
									</tr>
								<?php foreach ($data['id'] as $element):?>
									<tr>
										<td><a href="<?=site_url("search/content")?>?ID=<?php echo $element->Animal_id?>">
											<?php echo $element->Nickname?></a></td>
										<td><?php echo $element->Scientific_name;?></td>
										
										<?php if($session_id){?>
										<td>	
											<button onclick="delete_win()" class="btn btn-danger">
												<i class="icon-remove icon-white"></i>刪除</button>
										</td>												
										<?php }?>
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
    <script type="text/javascript">
    	function delete_win(){
        	alert("您確定要刪除此動物嗎?");
        	window.location="<?=site_url("search/deleting_animal")?>?ID=<?php echo $element->Animal_id?>";
    	}
    </script>
</body>