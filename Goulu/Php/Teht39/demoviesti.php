<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
 <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../tyyli.css">
 <link rel="stylesheet" href="Style.css">
 <style>
  .viesti_lomake {
    width: 75%;
	border: 1px solid RGB(56,41,12);
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	box-shadow: 10px 10px 5px grey;
  }
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    /*background-color: #f8f8f8;*/
    resize: none;
  }
  input[type=submit] {
    width: 40%;
    background-color: RGB(83,76,24); /*#4CAF50*/
    color: white;
	font-size: 18px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=submit]:hover {
    background-color: RGB(192,175,56);
	color: RGB(128,0,0);
  }
  .Xfile{
	color:black; 
	text-decoration: none;
  }
  a.Xfile:hover{
	color: black;
    text-decoration: underline;	 
  }
  </style>
</head>
<body>

<div class="col-3 col-s-3">
<div class="menu">
<?php include "SideMenu39.php" ?>
</div>
</div>


 </div>

  
  <div class="viesti_lomake"> 
   <form action="viesti_hk.php" method="post" id="Paluu">
    Nimesi:<br>   
    <input type="text" name="Nimi"><br><br>
	
    Sähköpostisi:<br>	
    <input type="text" name="Sahkoposti"><br><br>
	
    Viesti:<br> 
    <textarea name="Viesti"></textarea><br><br>
    <input type="submit" value="Lähetä"> 
   </form> 
  </div>
  
  
 </div>
</div>

<div class="footer">
  <p><a class="Xfile" href="xfile.php">Edit by Tapio</a>.</p>
</div>

</body>
</html>
