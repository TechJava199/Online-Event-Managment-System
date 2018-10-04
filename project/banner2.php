<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>TTTT</title>
	<style>
	.content{
		margin:auto;
		width:190px;
		perspective:1000px;
		position:relative;
		padding-top:80px;
		  
	}
	.content-carrousel{
		width:80%;
		position:absolute;
		float:right;
		animation:rotar 15s infinite linear;
		transform-style:preserve-3d;
	}
	.content-carrousel:hover{
		animation-play-state:paused;
		cursor:pointer;
	}
	.content-carrousel figure{
		width:100%;
		height:120px;
		border:1px solid #4d444d;
		overflow:hidden;
		position:absolute;
		
		
	}
	.content-carrousel figure:nth-child(1){
		
		transform:rotateY(0deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(2){
		
		transform:rotateY(40deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(3){
		
		transform:rotateY(80deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(4){
		
		transform:rotateY(120deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(5){
		
		transform:rotateY(160deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(6){
		
		transform:rotateY(200deg) translateZ(300px);
	}
	.content-carrousel figure:nth-child(7){
		
		transform:rotateY(240deg) translateZ(300px);
	}
	
	.shadow{
		position:absolute;
		box-shadow:0px 0px 20px 0px #000;
		border-radius:2px;
	}
	.content-carrousel img
	{
		image-rendering:auto;
		transition:all 300ms;
		width:100%;
		height:100%;
	}
	.content-carrousel img:hover{
		transform:scale(1.2);
		transition:all 300ms;
	}
	@keyframes rotar{
		from
		{
			transform:rotateY(0deg);
		}to{
			transform:rotateY(360deg);
		}
	}
	
	</style>
	 </head>
	 <body>
		<section class="slideshow">
			<div class="content">
				<div class="content-carrousel">
					<figure class="shadow"><img src="images\121.jpg"></figure>
					<figure class="shadow"><img src="images\122.jpg"></figure>
					<figure class="shadow"><img src="images\123.jpg"></figure>
					<figure class="shadow"><img src="images\124.jpg"></figure>
					<figure class="shadow"><img src="images\124.jpg"></figure>
					<figure class="shadow"><img src="images\123.jpg"></figure>
					<figure class="shadow"><img src="images\122.jpg"></figure>
					<figure class="shadow"><img src="images\121.jpg"></figure>
					
				</div>
			</div>
		</section>
	</body>
</html>