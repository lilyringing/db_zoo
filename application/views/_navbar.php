
	<div class="bs-example">
    	<div class="navbar navbar-static">
        	<div class="navbar-inner">
            	<a href="<?=site_url("/")?>" class="brand">Zoo</a>
            	<div class="nav-collapse collapse navbar-responsive-collapse">
            	<ul class="nav">
                	
                	<li><a href="<?=site_url("search/animal_info")?>">動物資訊</a></li>
                	
                	<li class="dropdown">
        				<a href="" class="dropdown-toggle" data-toggle="dropdown" class="dropdown-toggle">
        				園區資訊 <b class="caret"></b></a>
						<ul class="dropdown-menu">
          					<li><a href="<?=site_url("display/building")?>">展館位置</a></li>
          					<li><a href="<?=site_url("display/store")?>">商店位置</a></li>
						</ul>
					</li>
					
					<li><a href="<?=site_url("project/research")?>">研究計畫</a></li>
					
            	</ul>
            	</div>
            	<ul class="nav pull-right">
                	<li><a href="<?=site_url("user/login")?>">登入</a></li>
            	</ul>
        	</div>
    	</div>
	</div>
	   