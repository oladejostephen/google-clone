<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>profile 3</title>
	<script src="./js/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="./js/libs/lodash/lodash.min.js"></script>
<script src="./js/plugins/js.cookie/js.cookie.js"></script>
<!-- <script src="/js/plugins/autocomplete/jquery.autocomplete.min.js"></script> -->
<!-- <script src="/js/plugins/velocity/velocity.min.js"></script> -->
<!-- <script src="/js/plugins/velocity/velocity.ui.min.js"></script> -->
<!-- <script src="/js/plugins/transit/jquery.transit.min.js"></script> -->
<!-- <script src="/js/plugins/scrollmagic/jquery.scrollmagic.min.js"></script> -->
<!-- <script src="/js/plugins/jhash/jhash-2.1.min.js"></script> -->
<script src="./js/script_timer.js"></script>
<!-- <script src="/js/anchor_scroll.js"></script> -->
<script src="./js/post_redirect.js"></script>
<!-- <script src="/js/buffer.js"></script> -->

<script src="https://kit.fontawesome.com/349e5d63c8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc0-x85CWwIhB3O9laBR_DIR--uPjCyJY"></script>
<link rel="stylesheet" href="./css/base.css">
<link rel="stylesheet" href="./css/header.css">
	<link rel="stylesheet" href="./css/sidebar.css">
	<link rel="stylesheet" href="./css/sidebar_right.css">
<style>
.footer {
	position: fixed;
	bottom: 0;
	left: 20px;
	right: 0;
	width: calc(100% - 20px);
	z-index: 14;
	height: 50px;
}



	.footer {
		background: linear-gradient(270deg, #111, #fff);
		height: 75px;
	}
	.page_content {
		bottom: 50px;
	}

.footer .inner {
	height: 50px;
	position: absolute;
	background: linear-gradient(270deg, #111, #ddd);
	bottom: 0;
	right: 0;
	width: 50%;
	padding: 0 0 0 7%;
}

.footer .triangle {
	height: 100%;
	z-index: -1;
	width: 112.5px;
	background: #ddd;
	transform: skew(-60deg);
	position: absolute;
	left: 0;
	top: 0;
	transform-origin: top;
}

.footer .search {
	white-space: nowrap;
	border: 1px solid #000;
	border-width: 0 0 1px 0;
	display: table;
	vertical-align: top;
	position: absolute;
	bottom: 12px;
	right: 56px;
	width: 60%;
	padding: 0;
	font-size: 0;
	text-align: right;
}

.footer .search > * {
	margin: 0;
	padding: 0 !important;
	display: table-cell;
	font-size: 0;
}

.footer .search > .left {
	width: 99%;
}

.footer .search > .right {
	width: 1%;
}

.footer .search.focused {
	background-color: #fff;
}

.footer .search .query {
	background-color: transparent;
	padding: 5px;
	font-size: 15px;
	line-height: 1;
	outline: none;
	border: none;
	/* display: block; */
	white-space: nowrap;
	width: 100%;
	margin: 0;
}

.footer .search > * > * {
	vertical-align: top;
}

.footer .links {
	margin: 10px;
	position: relative;
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 14px;
	white-space: nowrap;
	line-height: 0.8;
}

.footer .links a {
	margin: 0 5px;
	display: inline-block;
	vertical-align: top;
}

.footer .links a.log_in {
	font-size: 23px;
}

.footer .search .submit {
	padding: 0px;
	margin: 0;
	white-space: nowrap;
	text-transform: uppercase;
	font-weight: 600;
	display: inline-block;
	-webkit-appearance: none;
	border: none;
	outline: none;
	font-size: 0;
	border: 1px solid #000;
	border-width: 1px 1px 0 0;
	background-color: transparent;
}

.footer .submit .top,
.footer .submit .mid,
.footer .submit .bottom {
	background-color: #ccc;
}

.footer .submit .top {
	height: 5px;
	border: 1px solid #000;
	border-width: 1px 0 0 0;
	border-width: 0 0 0 1px;
}

.footer .submit > * {
	display: block;
	white-space: nowrap;
}

.footer .submit > * > * {
	margin: 0;
	vertical-align: top;
	display: inline-block;
}

.footer .submit .mid .left {
	width: 15px;
	height: 14px;
	border: 1px solid #000;
	border-width: 0 0 1px 1px;
}

.footer .submit .mid .middle {
	line-height: 11px;
	font-size: 11px;
	border: 1px solid #000;
	padding: 1px 20px 1px 5px;
	border-width: 1px 0 0 1px;
}

.footer .submit .mid .right {
	width: 5px;
	height: 17px;
	border: 1px solid #000;
	border-width: 0 0 0 1px;
}

.footer .submit .bottom {
	height: 0;
}

.footer .submit .bottom2 {
	height: 4px;
}




.sidenav {
  height: 360px;
  width: 200px;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  float: left;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.sidebar a {
    background: none;
    border-bottom: 0.5px solid #455A64;
    color: #CFD8DC;
    font-size: 13px;
    padding: 14px 24px;
    text-align: center;
}

.sidebar header a {
    color: #fff;
    display: block;
    text-decoration: none;
    text-align: center;
    font-size: 17px;
    background-color:#022f35;
    margin-top: -19px;
    font-weight: 600;

}


.page_content {
    left: 10px;
}

/* custom css*/



	
</style>



	<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="header">
	<a href="/">
		<img class="logo vcenter" src="./img/logo.png">
	</a>
	<div class="triangle">
					<a class="login" href="./logout.php">
				<div class="bg"></div>
				<div class="text">Logout</div>
			</a>
			</div>
</div>	<div class="sidebar">



		<div class="border">
			<div class="green"></div>
			<div class="black"></div>
		</div>


		<div class="inner">
			<div class="nav_box overlay hidden">
				<div class="tail hcenter"></div>
				<div class="nav">
					<div class="tabs">
						<div class="title">Menu</div>
						<!-- <a class="tab" href="/profile.php">
							My Profile
						</a>
						<a class="tab" href="/users.php">
							View Users
						</a>
																															<a class="tab" href="/users?cat=<br />
<b>Notice</b>:  Undefined variable: i in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>43</b><br />
<br />
<b>Notice</b>:  Undefined variable: gdfdvfkvkhbf in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>43</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>43</b><br />
">
																	<br />
<b>Notice</b>:  Undefined variable: i in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>45</b><br />
<br />
<b>Notice</b>:  Undefined variable: gdfdvfkvkhbf in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>45</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>45</b><br />
																	Category <br />
<b>Notice</b>:  Undefined variable: i in <b>/opt/lampp/htdocs/zuubox/templates/sidebar.php</b> on line <b>47</b><br />
															</a>
						 -->
													<a class="tab" href="/users?cat=A1">
								A1							</a>
													<a class="tab" href="/users?cat=A2">
								A2							</a>
													<a class="tab" href="/users?cat=A3">
								A3							</a>
													<a class="tab" href="/users?cat=A4">
								A4							</a>
													<a class="tab" href="/users?cat=A5">
								A5							</a>
													<a class="tab" href="/users?cat=A6">
								A6							</a>
													<a class="tab" href="/users?cat=A7">
								A7							</a>
													<a class="tab" href="/users?cat=A8">
								A8							</a>
													<a class="tab" href="/users?cat=A9">
								A9							</a>
													<a class="tab" href="/users?cat=A10">
								A10							</a>
											</div>
				</div>
			</div>		
		</div>



		<div class="triangle">
			<map name="sidebar_triangle" id="sidebar_triangle">
				<area shape="poly" coords="" href="#oh" class="inner_tri">
				<area shape="poly" coords="" href="#yes" class="outer_tri">
			</map>
			<img src="img/sidebar_triangle.png" usemap="#sidebar_triangle" style="width:135px; height:72px;">
		</div>
	</div>
	<!-- <script src="http://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script> -->
	<script>
	$(function(){
		// FOR RESPONSIVE IMAGE MAP LINKS
		var $img = $('.sidebar .triangle img');

		var $innerMap = $('.sidebar area.inner_tri');
		var $outerMap = $('.sidebar area.outer_tri');

		var pairs = [
			{
				$area: $innerMap,
				coords: [
					[0.20431472081,0.45979899497],
					[0.20431472081,0],
					[0.71446700507,0]
				]
			},
			{
				$area: $outerMap,
				coords: [
					[0.17258883248,0],
					[0.17258883248,0.54773869346],
					[0.78045685279,0],
					[1,0],
					[0,1],
					[0,0]
				]
			}
		];

		function responsive_map($img, pairs) {
			var width = $img.width();
			var height = $img.height();

			pairs.forEach(function(pair){
				var $area = pair.$area;
				var percentange_coords = pair.coords;

				var coords = [];
				percentange_coords.forEach(function(coord){
					coord = coord.slice(0);

					coord[0] *= width;
					coord[1] *= height;
					// console.log(coord);
					coord = coord.map(Math.round);
					coord = coord.join();

					coords.push(coord);
				});
				coords = coords.join();
				$area.attr('coords', coords).prop('coords', coords);
			});
		}


		if($img.prop('complete')) {
			responsive_map($img, pairs);
		} else {
			$img.load(function(){
				responsive_map($img, pairs);
			});
		}
		$(window).on('resize', function(){
			responsive_map($img, pairs);
		});

		var $nav = $('.sidebar .inner .nav_box');
		$innerMap.click(function(){
			$nav.toggleClass('hidden');
			var sidebarHidden = $nav.hasClass('hidden') ? 'true' : '';

			Cookies.set('sidebarHidden', sidebarHidden);
		});
	});
	</script>
		<script src="js/sidebar_right.js"></script>
	<div class="sidebar_r">
		<div class="area1"></div>
		<div class="links">
			<a href="profile.php" class="link">Update</a>
			/
			<a href="profile.php" class="link">Profile</a>
			/
			<a href="recent.php" class="link">Recent</a>
			/
			<a href="settings.php" class="link">Settings</a>
		</div>
		<div class="cal_map">
			<div class="side_label">Calendar/Map</div>
			<div class="calendar">
				<div class="day_names">
					<div class="week">
						<div class="day">Sun</div>
						<div class="day">Mon</div>
						<div class="day">Tue</div>
						<div class="day">Wed</div>
						<div class="day">Thu</div>
						<div class="day">Fri</div>
						<div class="day">Sat</div>
					</div>
				</div>
				<div class="days">
					<div class="content overlay">
																																		<div class="week">
															<div class="day  ">
									29								</div>
																																			<div class="day  ">
									30								</div>
																																			<div class="day  ">
									31								</div>
																																			<div class="day this_month ">
									1								</div>
																																			<div class="day this_month ">
									2								</div>
																																			<div class="day this_month ">
									3								</div>
																																			<div class="day this_month low">
									4								</div>
															</div>
																																			<div class="week">
															<div class="day this_month med">
									5								</div>
																																			<div class="day this_month ">
									6								</div>
																																			<div class="day this_month high">
									7								</div>
																																			<div class="day this_month ">
									8								</div>
																																			<div class="day this_month ">
									9								</div>
																																			<div class="day this_month ">
									10								</div>
																																			<div class="day this_month ">
									11								</div>
															</div>
																																			<div class="week">
															<div class="day this_month ">
									12								</div>
																																			<div class="day this_month ">
									13								</div>
																																			<div class="day this_month ">
									14								</div>
																																			<div class="day this_month ">
									15								</div>
																																			<div class="day this_month ">
									16								</div>
																																			<div class="day this_month ">
									17								</div>
																																			<div class="day this_month ">
									18								</div>
															</div>
																																			<div class="week">
															<div class="day this_month ">
									19								</div>
																																			<div class="day this_month ">
									20								</div>
																																			<div class="day this_month ">
									21								</div>
																																			<div class="day this_month ">
									22								</div>
																																			<div class="day this_month ">
									23								</div>
																																			<div class="day this_month ">
									24								</div>
																																			<div class="day this_month ">
									25								</div>
															</div>
																																			<div class="week">
															<div class="day this_month ">
									26								</div>
																																			<div class="day this_month ">
									27								</div>
																																			<div class="day this_month ">
									28								</div>
																																			<div class="day this_month ">
									29								</div>
																																			<div class="day this_month ">
									30								</div>
																																			<div class="day  ">
									1								</div>
																																			<div class="day  ">
									2								</div>
															</div>
																		</div>
				</div>
			</div>
			<div class="map"></div>
		</div>
	</div>


<style>

	body{
		font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
		line-height: 1.8;
		font-size: 12px;
	}

	.container{

		width: 90%;
		margin-top: 30px;
			
		}


	p{
		font-size: 13px;
		color: #568d0f;
		margin: 0;
		 font-family: 'Lato';

	}

	.col-sm-4,.col-sm-5,.col-sm-3{
    border-right: 1px solid #dadad6;
	}


	ul{

		display: inline-block;
		 list-style: none;
	}

	.detail-box {
    padding: 10px;
    font-size: 13px;
    line-height: 1.8;
    margin-left: -50px;
}

	.ul-first{
		color: #363636;
        font-weight: 560;
	}

	.ul-second{
		color: #363636;
        
	}


	.row{
		margin-top: 20px;
	}

	.right{
    margin-top: 15px;
    text-align: right;

	}

	#red{
		 color: #ff0131;
	}

	#green{
		 color: #568d0f;
		 margin-top: -7px;
	}


	#green1{
		 color: #1a598e;
		 margin-top: -7px;
	}

	

    #nav-addedit-tab{
    color: #fff;
    background-color: #568d0f;
    }

      #nav-myfriends-tab{
    color: #fff;
    background-color: #042960;
    }

     #nav-bookmark-tab{
    color: #fff;
    background-color: #640a0a;
    }

     #nav-Messages-tab{
    color: #fff;
    background-color: #5600ff;
    }

    #nav-User-tab{
    color: #fff;
    background-color: #431e8d;
    }


    #nav-profile-tab{
    color: #fff;
    background-color: #1a598e;
    }

    .nav-tabs .nav-link {
    margin-right: 5px;
    margin-top: 7px;
    }

    
#btn {

	padding: 5px;
	font-size: 12px;
	background-color: #2e2e2e;
	margin-top: 5px;


}

.card-header {
    
    background-color:#303030;
    color: white;
    font-size: 15px;
   }

  .card-img-top {
    width: 100%;
    height: 200px;
    }


#color{
		color: white;
	}


</style>



<div class="page_content">

		<div class="container" style="background-color:#f3f3f3;">

			<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-addedit-tab" data-toggle="tab" href="#nav-addedit" role="tab" aria-controls="nav-addedit" aria-selected="true">People</a>
		    <a class="nav-item nav-link" id="nav-myfriends-tab" data-toggle="tab" href="#nav-myfriends" role="tab" aria-controls="nav-myfriends" aria-selected="false">
		    PLaces
			</a>

			<a class="nav-item nav-link" id="nav-bookmark-tab" data-toggle="tab" href="#nav-bookmark" role="tab" aria-controls="nav-bookmark" aria-selected="false">
		   Things
			</a>
			<a class="nav-item nav-link" id="nav-Messages-tab" data-toggle="tab" href="#nav-Messages" role="tab" aria-controls="nav-Messages" aria-selected="false">
		    Activites
			</a>

		    
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-addedit" role="tabpanel" aria-labelledby="nav-addedit-tab">
		  	<div class="row">

			  	<div class="col-sm-8">
			  		<img src="https://im0-tub-com.yandex.net/i?id=4a7a4cfb9323ce015d0ed86e59195ee4&n=13" width="100%" class="img-fluid" alt="Responsive image">
				</div>

				<div class="col-sm-2">
			  		<p>
			  			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultrices auctor massa eget tincidunt. Nunc et condimentum sem. Morbi sed sodales neque. Nulla vestibulum, dui a interdum pharetra, enim metus elementum dolor, volutpat consectetur nulla justo viverra est. Pellentesque sagittis dui magna, semper fringilla 
			  		</p>
				</div>


				<div class="card" style="width: 10rem;">
				  <img src="https://www.seofly.pl/wp-content/uploads/2017/06/content-marketing-warszawa-1024x683.jpg" width="80%" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-12">
					<header><h5>Content</h5></header>
					<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultrices auctor massa eget tincidunt. Nunc et condimentum sem. Morbi sed sodales neque. Nulla vestibulum, dui a interdum pharetra, enim metus elementum dolor, volutpat consectetur nulla justo viverra est. Pellentesque sagittis dui magna, semper fringilla Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultrices auctor massa eget tincidunt. Nunc et condimentum sem. Morbi sed sodales neque. Nulla vestibulum, dui a interdum pharetra, enim metus elementum dolor, volutpat consectetur nulla justo viverra est. Pellentesque sagittis dui magna, semper fringilla </p>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>






<div class="footer logged_in">
	<div class="inner">
		<div class="triangle"></div>
					<form class="search" action=".">
				<div class="left">
					<input type="text" class="query">
				</div>
				<div class="right">
					<button type="submit" value="Search" class="submit">
						<div class="top"></div>
						<div class="mid">
							<div class="left"></div>
							<div class="middle">Search</div>
							<div class="right"></div>
						</div>
						<div class="bottom"></div>
						<div class="bottom2"></div>
					</button>
				</div>
			</form>
			</div>
</div>


<script>
$(function(){
	var $query = $('.footer .search .query');
	var $search = $('.footer .search');

	$query.focus(function(){
		$search.addClass('focused');
	}).blur(function(){
		$search.removeClass('focused');
	});

	if($query.is(':focus')) {
		$search.addClass('focused');
	}
});
</script></body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
