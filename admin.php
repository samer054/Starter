<?php  
   session_start();
if(($_SESSION["Firstname"]) == null){
    header("Location: error.php");


    function logout()
    {

        session_unset(); 
        session_destroy();
    }


}




?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
 
//Show live search results----------------------------------------------------------
function Show1(str){
   
   if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
   request=new XMLHttpRequest();
 } else {  // code for IE6, IE5
   request=new ActiveXObject("Microsoft.XMLHTTP");
 }
   
   
   request.onreadystatechange = function()
  {
      if (request.readyState==4 && request.status == 200) {
          document.getElementById("txt").innerHTML=request.responseText;
  }
}
request.open("GET","ajax.php?txt="+str,true);
request.send();
} 
</script>

        <script> 
            $(document).ready(function(){
    $("#btnsettings").click(function(){
        $("#sub").slideToggle("fast");
    });
});
        
                $(document).ready(function(){
        $("#btnli").click(function(){
            $("#lst").slideToggle("fast");
        });
    });
   

                $(document).ready(function(){
        $("#btnLogin").click(function(){
            $("#loginBack").slideToggle("fast");
        });
    });
                    $(document).ready(function(){
        $("#close").click(function(){
            $("#loginBack").slideUp("slow");
        });
    });


</script>
 
        <meta charset="UTF-8">
       
        
        <style>
            @import url('https://fonts.googleapis.com/css?family=Quicksand');
            @import url('https://fonts.googleapis.com/css?family=Nunito+Sans');
            @import url('https://fonts.googleapis.com/css?family=Imprima');

            body
            {
                margin-top: 0;
                margin-right: 0;
                margin-left: 0;
                background-image:url('background.jpg');
                color:white;
                
             
                
            }
        .nav
            {
                       
                z-index: -1;
                width:100%;
                height: 100px;;
                margin-right: 0;
                margin-left: 0;
                margin-top: 0;
            
                background: linear-gradient(#536976, #292E49);
            }
        .title
            {
                position:absolute;
                font-family: 'Quicksand', sans-serif;
                color:#ecf0f1;
               margin-left:20px;
                font-size: 28px;
            }
            .menu
            {
                position: relative;
                z-index: 1;
                align-self: right;
                right:80px;
                bottom: 0px;
                padding-top: 70px;
             
            }
             .submenu
            {
                
            position: absolute;
            z-index:5;
                width:100%;
                height:40%;
                background: linear-gradient(#000000, #434343);
                background-position:bottom;
                display: none;
                color:white;
                text-align: center;
                font-family: fantasy;
                font-size: 32px;
              
               
                

        
          
            }
  
            .btn
            {
                margin-right:5px;
                float: right;
                bottom:0px;
                background-color:aliceblue;
                opacity:0.5;
                width:80px;
                height: 30px;
                border-top-right-radius: 5px;
                border-top-left-radius: 5px;
                color:black;
                font-family: 'Nunito Sans', sans-serif;
                text-align: center;
                 -webkit-transition: box-shadow 0.5s; 
                   
                
                
            }
                      .btnMenu
            {
                margin-right:5px;
                float: right;
                bottom:0px;
                background-color:aliceblue;
                opacity:0.5;
                width:80px;
                height: 30px;
                border-top-right-radius: 5px;
                border-top-left-radius: 5px;
                color:black;
                font-family: 'Nunito Sans', sans-serif;
                text-align: center;
                 -webkit-transition: box-shadow 0.5s; 
                   
                
                
            }
                      .btnAbout
            {
                margin-right:5px;
                float: right;
                bottom:0px;
                background-color:aliceblue;
                opacity:0.5;
                width:80px;
                height: 30px;
                border-top-right-radius: 5px;
                border-top-left-radius: 5px;
                color:black;
                font-family: 'Nunito Sans', sans-serif;
                text-align: center;
                 -webkit-transition: box-shadow 0.5s; 
                   
                
                
            }
                      .btnOrder
            {
                margin-right:5px;
                float: right;
                bottom:0px;
                background-color:aliceblue;
                opacity:0.5;
                width:80px;
                height: 30px;
                border-top-right-radius: 5px;
                border-top-left-radius: 5px;
                color:black;
                font-family: 'Nunito Sans', sans-serif;
                text-align: center;
                 -webkit-transition: box-shadow 0.5s; 
                   
                
                
            }
            .btn:hover
            {
                cursor: pointer;
                box-shadow: 20px 20px 50px 15px white;
                display:block;
                
         
                
            }

               .btnMenu:hover
            {
                cursor: pointer;
                box-shadow: 20px 20px 50px 15px white;
                display:block;
                
         
                
            }
               .btnOrder:hover
            {
                cursor: pointer;
                box-shadow: 20px 20px 50px 15px white;
                display:block;
                
         
                
            }
               .btnAbout:hover
            {
                cursor: pointer;
                box-shadow: 20px 20px 50px 15px white;
                display:block;
                
         
                
            }
         
            .imgLogin
            {
                cursor: pointer;
                padding-left: 10px;
                height: 40px;

              position: absolute;
                width:10;
                z-index: -1;

                position: absolute;
                width:10;
                z-index:1;


                
            }
            
            
            .loginMenu
            {
                position: absolute;
                height:50%;
                width:50%;
                background-color: white;
                margin-left: 450px;
                margin-top:200px;
                border-radius: 30px;
                border-bottom-style:solid;
                border-color: red;
                box-shadow: 0.5px 1px 15px ;
                padding-left: 50px;
                 padding-top: 40px;
                font-size: 28px;
               font-family: 'Quicksand', sans-serif;
                
            }
            .loginBack
            {
                position: fixed;
                height: 100%;
                width:100%;
                background-color: black;
                background-color: rgba(0,0,0,0.4);
                z-index: 10;
                display: none;
               

            }
            .imgUser
            {
                height: inherit;
                border-radius: 1900px;
            }

        .tblLogin
            {
                position: relative;
                float: right;
                right:200px;
                top:150px;
            }
            .txt
            {
                height:30px;
                margin:15px;
                border-radius: 5px;
                border-style: solid;
                border-bottom-width: thin;
                font-size: 20px;
            }
            .a
            {
                font-size: 48px;
            }
            .btnSubmit
            {
                position: relative;
                left:500px;;
                top:90px;
                background-color: antiquewhite;
                width:130px;
                text-align: center;
                border-radius: 5px;
                padding:5px;
                cursor: pointer;
                height:50px;
                border:none;
              
                
            }
      
            .xcls
            {
                position: relative;
                height:30px;
                width: 30px;
                float: right;
                right:50px;
                cursor: pointer;
            }

    
            .btnarr
            {
                
                width:25px;
                display:inline-block;
                position: relative;

            }
         
     
            .lst {
                color:white;
                border:none;
                background-color: #263238;
                position: absolute;
                overflow:hidden;
                box-sizing: content-box;
                float:none;
                width: 172px;
                display:none;
                 z-index: -1;
                position: absolute;
        
   
                list-style: none;
                font-family: 'Imprima';
           
               
                margin:0;
               
      

            }


            .lst > li
            {
                padding: 10px;
                position: relative;
                bottom: 10px;
                font-size: 24px;
                cursor: pointer;
                -webkit-transition: text-shadow 0.5s;
            
                
            }

            .lst > li:hover
            {
                text-shadow: 2px 3px 6px;
            
            }
         
            
     
             .lst > li >img
            {
                vertical-align: middle;
          
            }
            .btnd 
            {
                z-index: auto;
                position: relative;
                width:200px;
                background-color: antiquewhite;
                border: none;
                height:30px;
                border-top-right-radius: 10px;
                border-top-left-radius: 10px;
                box-sizing: content-box;
                
            }
            .tbl1
            {
                position: absolute;
                border-style: solid;
                align-content: center;
                align-self: center;
                float:right;
                border:none;
                right:0px;
                padding: 0px;
                margin: 0px;
           
            }
           .t
            {
            
                
            }
            .time
            {
                height:20px;
                width:140px;;
                font-family: 'Quicksand';
                float: right;
                position:relative;
                bottom: 60px;
                left:400px;
                color:aliceblue;
                top: -55px;

                
         
            }
                        .time:before
            {
           background-image: url(calendar.png);
                background-size: 20px 20px;
            display: inline-block;
            width: 20px; 
            height: 20px;
            content:"";
                vertical-align:bottom
   

         
            }
            p{
                color:red;
                 font-family: 'Imprima';
            }
            .btnSub
            {
                background-color:#e67e22;
                width:65px;
                height:30px;
                border:none;
                border-radius:5px;
                color:white;
                cursor:pointer;

            }
            .Name{
            color:white;
            font-family: 'Quicksand', sans-serif;
            font-size:24;
            position:relative;
            float:right;
            bottom:60px;
            border:none;
            left:50px;
            padding:0px;
            margin:0px;
                       
             }

             .Name::before
             {
                background-image: url(login.png);
                background-size: 35px 35px;
                display: inline-block;
                width: 35px; 
                height: 35px;
                content:"";
                vertical-align:middle;
                
             }
             .txtBox{
                position: absolute;
                top:200px;
                left:300px;
                align-items: center;
                height:30px;
                font-size: 22px;
                border-radius: 5px;
                border: 1px solid green;
                text-align: center;
            
            }
            .c{
                z-index:2;
                text-align: center;
                position: absolute;
                left:340px;
               font-family: 'Imprima';
               font-size:20px;
                width:650px;
                border-radius: 5px;
                height:200px;
                left:30%;
               top:25%;
               background-color: silver;
               text-align: left;
               padding-left: 50px;
               padding-top: 10px;
                -webkit-transition:height 0.2s;   
                transition: height 0.2s;
            
            
        }
    .c:hover{
        height:220px;
    }


            .search
        {

            text-align:left;
            position:absolute;
              box-sizing: border-box;
            width:700px;
            height:50px;
            border-radius: 5px;
            border:1px solid ;
            font-size:22px;
            padding-left: 90px;
            background-image: url('searchico.png');
            background-position: 10px;
            background-size: contain;
            background-repeat: no-repeat;
            left:30%;
            top:20%;
        

            
        }
        .searchTxt
        {
            
        }
        .resultTab
        {
         
            color:black;
            border: 1px solid white;
            margin:5px;
           
            font-size:18px;
            width:70%;
            padding:5px;
            padding-left:50px;
            border-radius:5px;
            background-image:url('bkicon.png');
            background-repeat: no-repeat;
            background-size: contain;

            
        }
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        .element{
            position:absolute;
            border:solid 1px black;
            height:15%;
            width:15%;
            border-radius: 5px;
            padding:5px;
            border-color:silver;
            font-family: 'Open Sans';
            background-image: url('reportelement.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-size: 100px;
            padding-left: 100px;
            padding-top: 10px;
            margin-top:170px;
            margin-left:60px;
            background-color:black;
            color:white;
            cursor:pointer;
            -webkit-transition: background-size .2s, padding .2s;
       

            
            
  
        }
        .element:hover{
       background-size:150px;
       padding-left:150px;
       
        }
        .element2{
            position:absolute;
            border:solid 1px black;
            height:15%;
            width:15%;
            border-radius: 5px;
            padding:5px;
            border-color:silver;
            font-family: 'Open Sans';
            background-image: url('elementpermission.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-size: 100px;
            padding-left: 100px;
            padding-top: 10px;
            margin-top:170px;
            margin-left:600px;
            background-color:black;
            color:white;
            cursor:pointer;
            -webkit-transition: background-size .2s, padding .2s;
       

            
            
  
        }
        .element2:hover{
       background-size:130px;
       padding-left:150px;
       
        }


               .element3{
            position:absolute;
            border:solid 1px black;
            height:15%;
            width:15%;
            border-radius: 5px;
            padding:5px;
            border-color:silver;
            font-family: 'Open Sans';
            background-image: url('bookrent.ico');
            background-size: contain;
            background-repeat: no-repeat;
            background-size: 100px;
            padding-left: 100px;
            padding-top: 10px;
            margin-top:170px;
            margin-left:1150px;
            background-color:black;
            color:white;
            cursor:pointer;
            -webkit-transition: background-size .2s, padding .2s;
       

            
            
  
        }
        .element3:hover{
       background-size:130px;
       padding-left:150px;
       
        }
        ul{
        
        }
        .element > p{text-align: center; }

        @media screen and (max-width: 900px) {
  div.hide {
    display: none;
  }
        }
        .logout{
            position: relative;
            display: inline-block;
            width: 30px;
            vertical-align: middle;
            cursor: pointer;
            z-index:3;
        }
        
        </style>
        
    </head>

    <body>
 
        <div class="nav">   
            
                <div class="title">

 
                Library System

                </div>
          
                
                <div class="menu">
                   <div class="btn" id="btnsettings">
                  
                    Settings
                    </div>
                    <div class="btnMenu">
                    Menu 
                    </div>
                    <div class="btnOrder">
                    Order 
                    </div>
                    <div class="btnAbout">
                    About Us 
                    </div>
                </div>
                <div class="Name">
           <a href="logout.php"> <img src="logout.png" class="logout"></a> <?php echo $_SESSION["Firstname"]." ".$_SESSION["Lastname"] ?> 
            </div>
                <div class="time" id="navTime">
                     </div>
          
               
               

        </div>
        <div class="submenu" id="sub">
            <h2>Settings</h2>
            <br>1 2 3 
        </div>
   
     
         <br>
         <input type="text" class="search" placeholder="Book Search..." onkeyup = "Show1(this.value)">
         <div id="txt"> </div><br>
<!-- elements 1-->
<div class="element">REPORTS 
    <ul>
        <li>
        Books report
        </li>
        <li>
        Users report 
        </li>
        <li>
        Special report      
        </li>
        </ul>
    </div>
    <!-- elements 2-->
<div class="element2 hide">Permissions 
    <ul>
        <li>
        Show permission
        </li>
        <li>
        Edit permission
        </li>
        <li>
        Add user     
        </li>
        </ul>
    </div>

        <!-- elements 3-->
<div class="element3 hide">Rent books 
    <ul>
        <li>
        Rent Books
        </li>
        <li>
        Recieve books
        </li>
     
        </ul>
    </div>





        <div class="login"  id="btnLogin">
               <img src="login.svg" class="imgLogin">
            </div>
        <div class="loginBack" id="loginBack">
        <form action="2.php" method="post">
            <div class="loginMenu">
            <img src=x.png class="xcls" id="close">
        <center class="a">Login</center>
                <img src="user.jpg" class="imgUser">
             
                 <table class="tblLogin">
                <tr>
                    <td>User Name</td><td><input type="text" class="txt" name="username"></td>
                     </tr>
                              <tr>
                    <td>Password</td><td><input type="password" class="txt" name="password"></td>
                     </tr>
                </table>

           
                        <input type="submit" value="Send" name="submit" class="btnSubmit">
         
                </div>
            </div>
         </div>
        </form>

        <script src="script.js"></script>
        <center>
       
         
            
        </form>


            
        
        
        </center>
    
        
      <!-- <table class="tbl1">
        <tr>
            <td class="t">
                  <input type="button" value="Backgrounds" id="btnli" class="btnd">
            </td>
        </tr>
            <tr>
                <td class="t">
                          <ul class="lst" id="lst">
                <li id="bg1"><img src="btnArr.png" class="btnarr"> option 1</li>
                <li id="bg2"><img src="btnArr.png" class="btnarr"> option 2</li>
                <li id="bg3"><img src="btnArr.png" class="btnarr"> option 3</li>
                <li id="bg4"><img src="btnArr.png" class="btnarr"> option 4</li>
              
            </ul>

                </td>
            </tr>
        </table> -->
      

      <br><br>

      
            
      
        

        <script src="script.js"></script>
                <script>
        
         // function myFunc()
        //    {
       //         a=document.getElementById("lst");
       //         a.style.display="none";
        //            //   document.getElementsByTagName("ul")[i].style.display="none";
                    
        //    }
        x= document.getElementById("navTime");
        var d=new Date();
        var m=d.getMonth()+1;
        x.innerHTML =d.getFullYear()+" / "+m+" / "+d.getDate();
        
                    
                    document.getElementById("bg1").addEventListener("click",function()
                                                                   {
                      document.body.style.backgroundImage = "url('bg1.jpg')";
                        
                    });
                    
                             document.getElementById("bg2").addEventListener("click",function()
                                                                   {
                      document.body.style.backgroundImage = "url('bg2.jpg')";
                        
                    });
                    
                             document.getElementById("bg3").addEventListener("click",function()
                                                                   {
                      document.body.style.backgroundImage = "url('bg3.jpg')";
                        
                    });
                    
                             document.getElementById("bg4").addEventListener("click",function()
                                                                   {
                      document.body.style.backgroundImage = "url('bg4.jpg')";
                        
                    });
        </script>

    </body>
</html>
























