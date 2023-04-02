<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 10px 10px 0 rgba(0.5, 0.5, 0.2, 1);
  margin: 4px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #133985;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: black;
  background-color: #001;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1 style="color: #c78c2e;">ABOUT US</h1>
    <p>Our Apparel Management System is mainly focusing on maintaining the records of Products in the inventory and perform the necessary admin operations.The search functionality is used to search the products in the inventory. Modify functionality is used to perform the add, update and delete operations. </p>
  
</div>

<h2 style="text-align:center">Our Team Behind This Project</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Kedar.PNG" alt="Kedar" style="width:50%; height:50%" class="center">
      <div class="container">
        <h2>Kedar Kasture</h2>
        <p class="title">Team 5 Member</p>
        <p>kkastu2@uic.edu</p>
        <a href="https://www.linkedin.com/in/kedar-kasture/">LinkedIN</a>
        <a href="https://www.instagram.com/lil_delay/">Instagram</a>
        <a href="https://www.facebook.com/kedar.kasture1">Facebook</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Madhura.PNG" alt="Madhura" style="width:50%; height:50%" class="center">
      <div class="container">
        <h2>Madhura Jagtap</h2>
        <p class="title">Team 5 Member</p>
         <p>mjagta2@uic.edu</p>
        <a href="https://www.linkedin.com/in/madhura-jagtap-171111146/">LinkedIN</a>
        <a href="https://www.instagram.com/madhura_j06/">Instagram</a>
        <a href="https://www.facebook.com/madhura.jagtap.3">Facebook</a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="dheeraj.PNG" alt="Dheeraj" style="width:50%; height:50%" class="center">
      <div class="container">
        <h2>Dheeraj Kaushal</h2>
        <p class="title">Team 5 Member</p>
        <p>dkaush5@uic.edu</p>
        <a href="https://www.linkedin.com/in/dheeraj-kaushal-b71610177/">LinkedIN</a>
        <a href="https://www.instagram.com/dheerajkaushal03/">Instagram</a>
        <a href="https://www.facebook.com/dheeraj.kaushal.773">Facebook</a>
      </div>
    </div>
  </div>
    
  <div class="column">
    <div class="card" style="">
<img src="Raina.png" alt="Raina" style="width:50%; height:50%" class="center">
      <div class="container">
        <h2>Raina Jose</h2>
        <p class="title">Team 5 Member</p>
        <p>rjose21@uic.edu</p>
        <a href="https://www.linkedin.com/in/raina-miriam-jose-650724154/">LinkedIN</a>
        <a href="https://www.instagram.com/rainamiriamvarghese/">Instagram</a>
        <a href="https://www.facebook.com/raina.m.jose">Facebook</a>
      </div>
    </div>
  </div>
      <div class="column">
    <div class="card">
      <img src="Nikhil.png" alt="Nikhil" style="width:50%; height:50%" class="center">
      <div class="container">
        <h2>Nikhil Kataria</h2>
        <p class="title">Team 5 Member</p>
        <p>nkatar2@uic.edu</p>
		<a href="https://www.linkedin.com/in/nikhilkataria1997/">LinkedIN</a>
        <a href="https://www.instagram.com/nikhilkataria982/">Instagram</a>
        <a href="https://www.facebook.com/nikhil.kataria.982">Facebook</a>
      </div>
    </div>
  </div>
    </div>

</body>
</html>