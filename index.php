;<?php
	session_start();
	// Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: login.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body>
<?php
	require 'inc/navigation.php';
?>
    <!-- Page Content -->
    <div class="container-fluid">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
/* Make the image fully responsive */
.carousel-inner img {
    width: 100%;
    height: 50%;
   margin: auto;
  }
</style>
</head>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" align="center">
    <div class="carousel-item active">
      <img src="apparelcar.jpg" alt="UIC" width="1100" height="10">
    </div>
    <div class="carousel-item">
      <img src="apparelcar1.jpg" alt="UIC" width="1100" height="10">
    </div>
    <div class="carousel-item">
      <img src="apparelcar2.jpg" alt="UIC" width="1100" height="10">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	  <div class="row">
		<div class="col-lg-2">
		<h1 class="my-4"></h1>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<div>
				<img src="login1.png" alt="UIC" style="width:200px;height:200px;margin: auto; ">
				</div>
				<a class="nav-link active" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Search</a>
				<a class="nav-link " id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true">Modify</a>
				<a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">About</a>
			</div>
		</div>
		 <div class="col-lg-10">
			<div class="tab-content" id="v-pills-tabContent">
			  <div class="tab-pane fade" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Item Details</div>
				  <div class="card-body">
					
					<!-- Tab panes for item details and image sections -->
					<div class="tab-content">
						<div id="itemDetailsTab" class="container-fluid tab-pane active">
							<br>
							<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
							<form>
							  <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <label for="itemDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemDetailsItemNumber" id="itemDetailsItemNumber" autocomplete="off" placeholder="Item Number">
								  <div id="itemDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
								</div>
								<div class="form-group col-md-3">
								  <label for="itemDetailsProductID">Product ID</label>
								  <input class="form-control invTooltip" type="number" readonly  id="itemDetailsProductID" name="itemDetailsProductID" title="This will be auto-generated when you add a new item">
								</div>
							  </div>
							  <div class="form-row">
								  <div class="form-group col-md-6">
									<label for="itemDetailsItemName">Item Name<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="itemDetailsItemName" id="itemDetailsItemName" autocomplete="off" placeholder="Item Name">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-3">
								  <label for="itemDetailsDiscount">Discount %</label>
								  <input type="text" class="form-control" value="0" name="itemDetailsDiscount" id="itemDetailsDiscount" placeholder="Discount%">
								</div>
								<div class="form-group col-md-3">
								  <label for="itemDetailsQuantity">Quantity<span class="requiredIcon">*</span></label>
								  <input type="number" class="form-control" value="0" name="itemDetailsQuantity" id="itemDetailsQuantity" placeholder="Quantity">
								</div>
								<div class="form-group col-md-3">
								  <label for="itemDetailsUnitPrice">Unit Price<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" value="0" name="itemDetailsUnitPrice" id="itemDetailsUnitPrice" placeholder="Unit Price">
								</div>
								<div class="form-group col-md-3">
								  <label for="itemDetailsTotalStock">Total Stock</label>
								  <input type="text" class="form-control" name="itemDetailsTotalStock" id="itemDetailsTotalStock" readonly placeholder="Total Stock">
								</div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6" style="display:inline-block">
								  <!-- <label for="itemDetailsDescription">Description</label> -->
								  <label for="itemDetailsTotalStock">Location</label>
								  <textarea rows="1" class="form-control" placeholder="Location" name="itemDetailsDescription" id="itemDetailsDescription"></textarea>
								</div>
							  </div>
							  <span class="badge rounded-pill bg-success float-right btn-sm"><button type="button" id="addItem" class="btn btn-success">Add Item</button></span>
							  <span class="badge rounded-pill bg-primary float-right btn-sm"><button type="button" id="updateItemDetailsButton" class="btn btn-primary">Update</button></span>
							  <span class="badge rounded-pill bg-danger float-right btn-sm"><button type="button" id="deleteItem" class="btn btn-danger">Delete</button></span>
							  <span class="badge rounded-pill bg-light text-dark float-right btn-sm"><button type="reset" class="btn" id="itemClear">Clear</button></span>
							
							</form>
						</div>
					</div>
				  </div> 
				</div>
			  </div>
			    
			  <div class="tab-pane fade" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-body">										
  
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="itemSearchTab" class="container-fluid tab-pane active">
						  <br>
						  <!-- <a href="#" class="itemDetailsHover" data-toggle="popover" id="10">wwwee</a> -->
							<div class="table-responsive" id="itemDetailsTableDiv"></div>
						</div>
					</div>
				  </div> 
				</div>
			  </div>
			  
			  <div class="tab-pane fade  show active" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
				<div class="card card-outline-secondary my-4" style="max-width: 70rem;">
				<!--  <div class="card-header">Search Inventory Page<button id="reportsTablesRefresh" name="reportsTablesRefresh" class="btn btn-warning float-right btn-sm">Refresh</button></div>-->
				  <div class="card-body">										
  
					<!-- Tab panes for reports sections -->
					<div class="tab-content">
						<div id="itemReportsTab" class="container-fluid tab-pane active">
							<br>
							<p>Use the grid below to search all details of items</p>
							<div class="table-responsive" id="itemReportsTableDiv"></div>
						</div>
					</div>
				  </div> 
				</div>
			  </div>
			</div>
		 </div>
	  </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
