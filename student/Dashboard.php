<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'tproject');
include("MainMenu.php");
$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
$fullname= isset($_POST['fname']) ? $_POST['fname'] : $_SESSION['fname'];

$sql = "SELECT Picture FROM users WHERE UserName='$useridentity'";
$result = mysqli_query($db,$sql);
$rows = mysqli_fetch_array($result);
$image = $rows['Picture'];
$image_src = '../myimages/'.$image;

?>

<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">FUD</div>
			</div>
            
			<p></p>
                <div class="col-lg-10">
                    <h1 class="page-header">Student Portal Dashboard</h1><h3 style="color:#cc0000";><?php echo 'Welcome '.$fullname; ?></h3>
                </div>
				
				<div class="col-lg-2">
                    <img src= "<?php echo $image_src;?>" class="img-circle" width="110" height="135" alt="pic">
                </div>
            </div>

            <!-- ... Your content goes here ... -->
		<div class="jumbotron">
			<h2 align="center">Welcome to Online Students Clearance System For Computer Science Department,Federal University Dutse</h2>

		</div>
		<div class="row">
			<div class="col-sm-4" ><img src="fud.jpeg" width="300" height="330" alt="pic">
				<div>
					<p align="justify">
					The Federal University Dutse (FUD), received its charter, 
					along with eight other newly established Federal Universities, 
					from the Federal Government of Nigeria on February 9, 2011. 
					The University’s campus is located in the capital of Jigawa state, Dutse, 
					an ancient town in north-western Nigeria. The University’s host town, Dutse, 
					offers the charm of a small agricultural town, with easy access to major 
					metropolitan areas such as Kano, Bauchi, Maiduguri, and Kaduna. The university recognizes 
					the importance of its location in Dutse and seeks to link its research 
					and teaching to the vast resources of these great metropolitan areas in the 
					surrounding states.
					</p>
				</div>
			</div>
			<div class="col-sm-4" width="330" height="330" style="background-color: #b8b894; color: #ffffff;">
			<p align="justify">
			FUD seeks to attract a diverse and international faculty and student body, 
			to support research and teaching on global issues, and to create academic relationships 
			with many universities and higher educational institutions in Nigeria and across the world. 
			It expects all areas of the university to advance knowledge and learning at the highest level 
			and to convey the products of its efforts to the community, the nation, and the world.
			</p>
			<p align="justify">
			As a new federal government-owned institution, FUD offers a broad range of degree programs 
			in the humanities, the natural and social sciences, and agriculture, in years to come, 
			courses in management sciences, environmental studies, law, education, 
			engineering, and medicine. FUD’s pioneer student body will be about 265 undergraduates.
			</p>
			<p align="justify">
			As a new university, it is committed to the best tradition of excellence. 
			It aspires to be a teaching and research-intensive, technologically driven institution. 
			FUD hopes to attract distinguished nationally and internationally known researchers, authors, 
			scientists and scholars, and other fellows and members of professional associations 
			and academies who might help disseminate its vision of higher education, knowledge, and service.
			</p>
			</div>
			<div class="col-sm-4" ><img src="images/aa.jpg" width="300" height="330" alt="pic">
				<div>
					<p align="justify">
						<h3>List of leaders:</h3><br/>
						<ul>
						<b>SAS Principal (and director of college section)</b><br/>
							<li>Professor Abdukarim Sabo Mohammed was Born in Gumel Jigawa state, 
								He attended Science Secondary School, Dawakin Kudu Kano State (1981 – 1984).
								 He obtained his Bachelor Degree in Applied Biology from Bayero University, 
								 Kano in 1989, Master degree in Food Biotechnology from University of Strathclyde Glasgow,
								  United Kingdom in 1995 and Doctor of Philosophy (PhD) in Enzyme and Food 
								  Biotechnology from University Putra Malaysia in 2006. 
								  He was a Graduate Assistant at the department of Biological science, 
								  Bayero University Kano (1990 – 1992) and a lecturer (1990 to 1997), 
								  an Associate Professor at University Putra Malaysia (2006 – 2017) and now a Professor of 
								  Enzyme and Food Biotechnology at the department of Microbiology and Biotechnology.
							</li>
							<b>M A Abdulazeez (2019) is the Vice Chancellor of Abubakar Tafawa Balewa University.</b><br/>
							<li>Kabiru Bala (2020) is the Vice Chancellor of Ahmadu Bello University.</li>
							<li>Sagir Adamu Abbas (2020) is the Vice Chancellor of Bayero University, Kano</li>
							<li>Maimuna Waziri (2021) is the Vice Chancellor of Federal University Gashua.</li>
							
						</ul>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"></div>
			<div class="col-sm-6"></div>
		</div>
		            


        </div>
    </div>
