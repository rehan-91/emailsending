<html>
<head>
<title>Multilevel Dropdown</title>
<style>
.parent {display: block;position: relative;float: left;line-height: 30px;background-color: #4FA0D8;border-right:#CCC 1px solid;}
.parent a{margin: 10px;color: #FFFFFF;text-decoration: none;}
.parent:hover > ul {display:block;position:absolute;}
.child {display: none;}
.child li {background-color: #E4EFF7;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
.child li a{color: #000000;}
ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
ul ul ul{left: 100%;top: 0;margin-left:1px;}
li:hover {background-color: #95B4CA;}
.parent li:hover {background-color: #F0F0F0;}
.expand{font-size:12px;float:right;margin-right:5px;}
</style>
</head>
<body>
<ul id="menu">
	@php
	   $category = DB::table('categories')->get();
	   
	   
	   //var_dump($subcategory);
	@endphp
	<li class="parent"><a href="#">Category</a>
	<ul class="child">
		@foreach($category as $cat)
		@php
		 $subcategory = DB::table('subcategories')->where('category_id', $cat->id)->get();

		// print_r($subcategory)
		@endphp
		<li class="parent">
			<a href="#">{{$cat->name}} <span class="expand">&raquo;</span></a>

			<ul class="child">
				@foreach($subcategory as $subcat)
			<!-- <li><a href="#">SUBCAT1 </a></li>
			<li><a href="#">SUBCAT2</a></li> -->

			<li class="parent"><a href="#">{{$subcat->name}}</a><span class="expand">&raquo;</span>
				<ul class="child">
					@php
					    $products = DB::table('product')->where('category_id',$subcat->category_id)->where('subcategory_id',$subcat->id)->get();
					   //print_r($products);
					@endphp
					@foreach($products as $pro)
					<li><a href="#">{{$pro->name}}</a></li>
					@endforeach
					
				</ul>
			</li>
			@endforeach

			</ul>
			
		</li>
		@endforeach

		<!-- <li><a href="#">CAT2</a></li>
		<li><a href="#">CAT3 </a></li> -->
		
	</ul>
	</li>
	
</ul>
</body>
</html>