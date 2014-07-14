<style>
#wrapper{text-align:center;} 
#Previewholder{
	left:0;
	top:0;
	position:absolute;
	display:none;
	background:#fff;
}
#Previewholder img{
	display:block; 
}
#Previewholder p{ 
	margin:0;
	padding:0; 
	font:11px Verdana,sans-serif; 
	color:#090808; 
}
#Previewholder p span{
	border-top:1px solid #ccc;
	display:block; 
	padding:5px;   
	background:transparent url(../images/desc_bg.gif) 0 100% no-repeat;
}
.marquee{
filter: alpha(opacity=100);
}
</style>
<script type="text/javascript" src="#">

</script>

<script type="text/javascript">
	$(document).ready(function() { 	
	$('.zoomple').zoomple({ 
			blankURL : 'images/blank.gif',
			loaderURL : 'images/loader.gif'
			});
	
	$('.zoompleFixed').zoomple({offset : {x:4,y:0},windowPosition : {x:'right',y:'bottom'}, zoomWidth : 250,  zoomHeight : 250, attachWindowToMouse : false}); 
	$('.zoompleDiffWidth').zoomple({offset : {x:10,y:10}, zoomWidth : 250, delay : 1000, zoomHeight : 250}); 
 }); 
</script>  


<script type="text/javascript" src="http://localhost/js/zoomple-1.4.js">


</script>


<div class="row">
	<?php foreach ($products as $product):?>
	<div class="col-sm-6 col-md-4">
		<div class="">
     
			<?php echo $this->Html->link($this->Html->image($product['Product']['image'],array('class' => 'my-class')),
					array('action'=>'view',$product['Product']['id']),
					array('escape'=>false,'class'=>'zoomple'));?>
                    
                 
                 
                 
                 
			<div class="caption">
				<h5>
					<?php echo $product['Product']['name'];?>
				</h5>
				<h5>
					Price: $
					<?php echo $product['Product']['price'];?>
				</h5>
			</div>
		</div>
	</div>
	<?php endforeach;?>
   
</div>
