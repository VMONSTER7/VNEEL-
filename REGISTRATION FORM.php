<!DOCTYPE html>
<html>
    <head>
   	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="REGISTRATION.css">
</head>
	<body style="background-image:url('background.jpg');background-repeat:no repeat;background-size:100%">
                 <div class="form-group" style="border-radius: 7px;">
                 <div class="row" id="head" >
                 <div class="col-sm-1">        <div class="imgclass" >
            <img style="width: 10%;" src="PRO-JAL.bgphoto/10-removebg-preview.png" alt=""></div></div>
                 <div class="col-sm-10"style="font-size:30px;color:aliceblue;padding:2%;font-weight:bold;font-family:Verdana;display: flex;height:200px;text-align:left;">VNEEL</div>
                <div class="col-sm-1" ><a href="Home.html"><button>HOME</button></a></div>

 </div>
<div align="center">
            <form method="post" action="index.php" id="form" class="form-horizontal">
            <div>
          
            <h1 style="text-align:center;font-family:Verdana;margin:0px 0px 30px 0px">REGISTRATION FORM</h1>
                      <div class="form-group">
                               <div class="col-sm-3"></div>
                               <div class="col-sm-3" > BILL NO. </div>
                               <div class="col-sm-3" >  
                              <input type="text" name="billno"  required placeholder="Enter Bill no. " />
                              </div>
                               <div class="col-sm-3"></div>              
                      </div>  
         
           
            <div  class="form-group">
                               <div class="col-sm-2" >   </div>   
                              <div class="col-sm-1"  >   FIRST NAME</div>  
                              <div class="col-sm-3" >               
                              <input type="text" name="fname"  required placeholder="Enter First Name " />
                              </div>
                              <div class="col-sm-1" >LAST NAME </div>
                              <div class="col-sm-3" >         
                              <input type="text" name="lname"  required placeholder="Enter Last Name " />
                              </div>
                              <div class="col-sm-2" >   </div>            
              </div>
          
           
            <div class="form-group">
                               <div class="col-sm-2" >   </div>   
                               <div class="col-sm-1" > EMAIL</div>
                               <div class="col-sm-3" >  
                               <input type="email" name="email"  required placeholder="Enter Email " />
                               </div>
                               <div class="col-sm-1" > PHONE NO. </div>
                               <div class="col-sm-3" >  
                               <input type="number" name="phone"  required placeholder="Enter Phone no. " />
                               </div>
                               <div class="col-sm-2" >   </div>   
             </div>
             
            
            <div class="form-group">
                               <div class="col-sm-2" >   </div>   
                               <div class="col-sm-1" >   
                                AADHAAR NO. </div>
                               <div class="col-sm-3" >  
                               <input type="number" name="aadhaar" required placeholder="Enter Adhaar no. " />
                               </div>
                               <div class="col-sm-1" >   
                               FATHER's NAME</div>
                               <div class="col-sm-3" >  
                               <input type="text" name="father"  required placeholder="Enter Father's Name " />
                               </div>
                               <div class="col-sm-2" >   </div>              
           </div>
           </form>
           
           <div class="form-group">
                               <div class="col-sm-2" >   </div>   
                              <div class="col-sm-1">ADDRESS</div>
                              <div class="col-sm-3">
                              <input type="text" name="address"  required placeholder="Enter Address" />
                              </div>
                              <div class="col-sm-1" > OFFICE ADDRESS </div>
                              <div class="col-sm-3" >   
                              <input type="text" name="office"  required placeholder="Enter Office Address" />                    
                               <div class="col-sm-2" >   </div>               
            </div>
             </div>
            
             <div class="form-group">
                                <div class="col-sm-3" ></div>
                                <div class="col-sm-2">
                                PASSWORD</div>
                                 <div class="col-sm-4">                                
                                 <input type="password" name="password"  required placeholder="Enter password" />    
                                </div>

                               <div class="col-sm-3" ></div>
   </div>
       
            
            <div align="center">
            <input type="submit" style="border-radius: 10px; padding:10px; border:none;color:black;background-color:#e3e3e3;" value="Register"/>
            </div>

</div>
</form>
</div>
	</body>
</html> 