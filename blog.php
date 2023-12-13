<!DOCTYPE html>
<html>
<head>
  <title>HMS</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
	
	
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  margin-top: 60px;
  margin-left: 90px;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.head{
  margin-top: 25px;
}
</style>
</head>
<body>

<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> HMS  </font><font color="#000"> Hospital</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="index.php">HOME</a> 
							<a href="about.php">ABOUT US</a>  
							<a href="blog.php">BLOG</a>
							<a href="Gallery.php">GALLERY</a> 
							<a href="indor.php">DOCTOR</a>
					
							
						</font>
					</td>
				</tr>
			</table>

			
		

			
		</div>
	</div>
	
<center>
  <div class="head">
<h2>OUR BLOG</h2>

<h4>Resize the browser window to see the effect.</h4>
  </div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="mri.php">
      <img src="./imgs//th (4).jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">MRI view</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="icu.php">
      <img src="./imgs//th (2).jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">ICU view</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="ward.php">
      <img src="./imgs//th (3).jpg" alt="Northern Lights" width="600" height="400" >
    </a>
    <div class="desc">WARDS view</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id, adipisci nihil accusantium, laudantium recusandae, blanditiis optio quasi provident ex dignissimos.<br> Sequi error sapiente facilis!</p>
</div>
</center>
</body>
</html>
























