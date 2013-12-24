<ul class="page-sidebar-menu">
	<li>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		<div class="sidebar-toggler hidden-phone"></div>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	</li>
	<li>
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<form class="sidebar-search" action="extra_search.html" method="POST">
			<div class="form-container">
				<div class="input-box">
					<a href="javascript:;" class="remove"></a>
					<input type="text" placeholder="Search..."/>
					<input type="button" class="submit" value=" "/>
				</div>
			</div>
		</form>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
	</li>
	<li class="start active ">
		<a href="<?php echo $this->createUrl(null);?>">
		<i class="fa fa-home"></i> 
		<span class="title">Dashboard</span>					
		<span class="selected"></span>
		</a>
	</li>
	<li class="">
		<a href="javascript:;">
		<i class="fa fa-cogs"></i> 
		<span class="title">Products</span>					
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">			
			<li >
				<a href="<?php echo $this->createUrl('Products/Index');?>">Index</a>
			</li>
			<li >
				<a href="<?php echo $this->createUrl('Products/Create');?>">Create</a>
			</li>			
			<li >
				<a href="<?php echo $this->createUrl('Products/Update');?>">Get Asin</a>
			</li>			
		</ul>
	</li>	
</ul>