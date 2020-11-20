<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Event Management|Package</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	 <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	
    <div class="container">
      
      <h1>Choose Your Package</h1><hr style="border-color: white">
        <form action="customer.php" method="post" accept-charset="utf-8">
         <div class="form row">
          <div class="form-group col-md-3">
            <label>
              <img class="image" src="image/img1.png"/>  
              <h2>Package 1</h2> 
              <h3>For 10 Persons</h3>    
              <p>Food</p>
              <p>Decoration</p>
              <h3>BDT 5000.00</h3>
              <div id="whitespace_1"></div>
            </label>
            <button class="button" name="choice" type="submit" value="1">BUY</button>

         </div> 
         <div class="form-group col-md-3">
            <label>
              <img class="image" src="image/img2.png"/>  
              <h2>Package 2</h2> 
              <h3>For 30 Persons</h3>    
              <p>Food</p>
              <p>Decoration</p>
              <p>Lighting</p>
              <h3>BDT 10000.00</h3>
              <div id="whitespace_2"></div>
            </label>
            <button class="button" name="choice" type="submit" value="2">BUY</button>
         </div>
         <div class="form-group col-md-3">
            <label>
              <img class="image" src="image/img3.png"/>  
              <h2>Package 3</h2> 
              <h3>For 50 Persons</h3>    
              <p>Food</p>
              <p>Decoration</p>
              <p>Lighting</p>
              <p>Music</p>
              <p>potography</p>
              <h3>BDT 20000.00</h3>
              <div id="whitespace_3"></div>
            </label>
            <button class="button" name="choice" type="submit" value="3">BUY</button>
         </div> 
         <div class="form-group col-md-3">
            
              <img class="image" src="image/img4.png"/>  
              <h2>Custom Package</h2> 
              <p>Persons<input type="number" name="person" value=""></p>
              <p>Decoration budget <input type="number" name="decor" value=""></p>     
              <p><input type ="checkbox" name="checkboxName[]" value ="1000"/>Lighting BDT1000</p>
              <p><input type ="checkbox" name="checkboxName[]" value ="2000"/>Music BDT2000</p>
              <p><input type ="checkbox" name="checkboxName[]" value ="1000"/>Photography BDT1000</p>
              <p><input type ="checkbox" name="checkboxName[]" value ="5000"/>Staff Services BDT5000</p>
              <div id="whitespace_4"></div>
            <button class="button" name="choice" type="submit" value="4">BUY</button>
         </div> 
      </div> 
        </form>
      
    </div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
</body>
</html>