<!DOCTYPE html>
<html>
<head>
	<title>Speakin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
	}
	h1,h2,h3,h4,h5,h6{
		margin: 0px;
	}
	p{
		padding: 0px;
	}
		header{
			background-color: #000;
			padding: 5px 0px;
			margin-bottom: 30px;
		}
		img{
			max-width: 100%;
		}
		.card-header{
			background-color: transparent;
			margin-bottom: 30px;
			padding-left: 0px;
		}
		.event-detail{
			width: 100%;
			min-height: 150px;
			border: 1px solid #ccc;
			box-shadow: 0px 0px 5px #ccc;
			padding: 20px;

		}
		.wrap{
			padding: 30px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 5px #ccc;
		}
		.my_btn{
			    width: 140px;
    height: 42px;
    line-height: 26px;
    border-radius: 20px;
    background-color: #1e72e2;
    border: none;
    color: #fff;
    font-weight: bold;
    margin: 0px auto;
		}
		.ticket{
			    width: 200px;
    border-radius: 0px;
    border-color: #000;
		}
		.rr{
			float: right;
		}
		footer{
			background-color: #000;
		}
		@media only screen and (max-width: 767px){
			.event-detail{
				margin-top: 50px;
			}
			body{
				font-size: 14px;
			}
			footer p{
				text-align: center;
			}
		}
	</style>
</head>
<body>
<header>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img src="img/logo.png" width="150px">
		</div>
	</div>
	</div>
</header>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7">
				<img src="img/event.png">
			</div>
			<div class="col-md-5">
				<div class="event-detail">
					<div class="row">
						<div class="col-md-2 col-2" align="center">
							<img src="img/date.png" width="30px">
						</div>
						<div class="col-md-10 col-10">
							<p>7, September 2019</p>
						</div>

						<div class="col-md-2 col-2" align="center">
							<img src="img/venue.png" width="30px">
						</div>
						<div class="col-md-10 col-10">
							<p>Plot No. 1A, BGR Building, Sector 16B, Noida</p>
						</div>

						<div class="col-md-2 col-2" align="center">
							<img src="img/city.png" width="30px">
						</div>
						<div class="col-md-10 col-10">
							<p>Speakin, Nioda, India</p>
						</div>

						<div class="col-md-2 col-2" align="center">
							<img src="img/ticket.png" width="30px">
						</div>
						<div class="col-md-10 col-10">
							<p>599 INR</p>
						</div>
					</div>
				</div>

				<div class="event-detail">
					<div class="row">
						<div class="col-md-10">
							<h4 class="mb-4"><strong>Buy Tickets</strong></h4>
						</div>
						<div class="col-md-12">
						<div class="row">

						<div class="col-md-2 col-2" align="center">
							<img src="img/time.png" width="30px">
						</div>
						
						<div class="col-md-10 col-10">
									<label>
									<input type="radio" class="time_slot" value="0" checked="checked">
							10 AM - 1 PM</label><br>
									<label>
							<input type="radio" class="time_slot" value="1">
							2 PM - 5 PM</label>
								
							</div>	
							<div class="col-md-10 offset-md-2 offset-2">
								<select class="form-control ticket" required="">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>

							<button type="button" class="btn btn-primary mt-2" onclick="eventModal()" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
							</div>
							
						</div>
					</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-3">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-3">
			
		
		<div class="wrap">
			<div class="card-header">
				<h4>Detail</h4>
			</div>
		<p><strong>	Speaker:</strong><br><br>

Havish Madhvapaty - Founder, Havish M. Consulting<br><br>

<strong>Takeaways</strong><br><br>

Build Complex Scenarios and Models<br>
Create Dynamic Charts<br>
Make Visually Appealing Dashboards in Excel<br>
Machine Learning and AI in Excel for Data Cleaning and Analytics<br><br>

Connect Excel to other datasets and Internet using Power Query<br>
Perform data transformation using Power Query<br>
Visualizations and Natural Language AI using Power BI<br><br>

Automate Excel using VBA<br>
Create UserForms using VBA<br>
Create Custom Functions (UDFs)<br><br>

Introduction to upcoming features in Excel<br>
Excel Learning Roadmap<br><br>

<strong>Who should attend?</strong><br><br>

Working professionals who seek shift in data and business analytics.<br>
Freshers looking to get a foothold in the IT industry.<br>
Anyone who wants to know what data-science is about, to raise their game.<br><br>

<strong>Prerequisites:</strong><br><br>

1. Laptops to be carried by every participant loaded with MS Office (preferably 2016)</p>

		</div>
		</div>
	</div>
</div>
</section>
<section class="mt-3">
	<div class="container-fluid">
		<div class="row" style="padding: 40px 0px;">
			<div class="col-md-12" align="center">
				<p class="mb-1"><strong><span style="color: #ccc;">Event By :</span> Speakin</strong></p>
				<button class="my_btn">Contact Us</button>
			</div>
		</div>
	</div>
</section>
<footer class="pb-3 pt-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<p style="color: #fff">2008 - 2018 Signure Technologies Pvt. Ltd.</p>
			</div>
			<div class="col-md-6">
				<p class="rr" style="color: #fff">All Right Reserved</p>
			</div>

			<div class="col-md-12" align="center">
				<img src="img/logo.png" width="200px">
			</div>
		</div>
	</div>
</footer>

<!-- Bootstrap Modal starts -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fill Your Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="modal-body">
     
        	<div class="row">
        		<div class="col-md-12">
        			<input type="hidden" id="slot" name="slot" value="">
        			<input type="hidden"id="seat" name="seat" value="">
        			<label>Name</label>
        			<input type="text" class="form-control" name="name" placeholder="Enter Your Name Here" required="">

        			<label>Mobile No</label>
        			<input type="number" class="form-control" name="mobile" placeholder="Enter Your Mobile No Here" required="">

        			<label>Email</label>
        			<input type="email" class="form-control" name="email" placeholder="Enter Your Email Here" required="">
        		</div>
        	</div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="book_event" class="btn btn-success" value="Submit">
      </div>
</form>
    </div>
  </div>
</div>

<!-- Bootstrap Modal Ends -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
	function eventModal(){
		var slot = $('.time_slot:checked').val();
		var seat = $('.ticket').val();
			$('#slot').val(slot);
			$('#seat').val(seat);

	}
</script>
</body>
</html>

<?php 
$GLOBALS['conn'] = mysqli_connect("localhost", "root", "", "event");
$conn = $GLOBALS['conn'];


if (isset($_POST['book_event'])) {
	extract($_POST);
	if ($slot!="" && $seat!="" && $name!="" && $email!="" && $mobile!="") {
		$ticket = 599;
		$amount = $seat * $ticket;
		$query = mysqli_query($conn, "INSERT INTO booking (ev_id, slot, seat, name, mobile, email, amount) VALUES (NULL, '$slot', '$seat', '$name', '$email', '$mobile', '$amount')");
		if ($query) {
			echo '<script>alert("done")</script>';
		}else{
			echo mysqli_error($conn);
		}
	}else{
		echo '<script>alert("Please Fill All Fields.")</script>';
	}
}

?>