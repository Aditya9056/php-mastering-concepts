<html> 
 <head>  	
  <title>Live Username Available or not By using PHP Ajax Jquery</title>  
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

  <style>  
	
  body{

   margin:0;  
   padding:0;  
   background-color:#f1f1f1;  
  }  
  .box  {  
	
   width:500px;  
   border:1px solid #ccc;  
   background-color:#fff;  
   border-radius:5px;
   margin-top:60px;  
  } 

	
  .img{

    border: 2px solid black;
    border-radius: 360px;
  } 
	
  </style>  

 </head>  	
 <body> 

  <div class="container box">  
	
   <div class="form-group"> 
	
	
    <h3 align="center">Live Username Available or not in Database By using PHP Ajax Jquery</h3>
	
               <h3 align="center" style="color: red">Please Subscribe My Youtube Channel</h3>	
    <br />  

    <label>Enter Username</label>  
	
    <input type="text" name="username" id="username" class="form-control" />
	
    <span id="availability"></span>
	
    <br /><br />
	
    <button type="button" name="register" class="btn btn-info" id="register" disabled>Register</button>

    <br />

   </div>  

   <br />  
	
   <br />  

  </div>  

 </body>  

</html>  
	

<script type="text/javascript">

	
       $(document).ready(function(){

	
             $('#username').blur(function(){

	
               var username =  $(this).val();

	
               $.ajax({
	
                      url:'dbh.php',
	
                      method:"POST",
	
                      data:{username: username},
	
                      success:function(data){
	
                        if(data === '0')

                        {
	
                          $('#availability').html('<span class="text-success">Username name Available</span>');
                          $('#register').attr("disabled",false);
	
                        }

                        else
                        {

                          $('#availability').html('<span class="text-danger">Username not Available</span>');
                          $('#register').attr("disabled",true);	
                        }
                      }	
               })

	
             });

      });

</script>
