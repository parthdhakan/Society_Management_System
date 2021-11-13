<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        .prop{
            
             letter-spacing: 1px;
             font-weight: bold;
             font-size: 1.25rem; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
        
            }
        .fonts{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        #facebook:hover{
			
            color:#98D056;
            transform: scale(1.2);
        }
        #insta:hover{
			
            color:#98D056;
            transform: scale(1.2);
        }
        #twitter:hover{
			
            color: #98D056;
            transform: scale(1.2);
        }
        #utube:hover{
			
            color: #98D056;
            transform: scale(1.2);
        }
        #browse:hover{
			
            color:#98D056;
            transform: scale(1.2);
        }
        .colors{
            color: white;
        }
         @media screen and (max-width: 786px) {
        #first {
            /* background-color: lightgreen;
            display: block;
            min-width: 100%; */
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            text-align: center;
        } 
        } 
        @media screen and (max-width: 786px) {
        #second {
            /* background-color: lightgreen;
            display: block;
            min-width: 100%; */
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        } 
        } 
        @media screen and (max-width: 786px) {
        footer {
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            min-width: 100%;
        }
        }
        @media screen and (max-width: 786px) {
        #imgid {
            
            width: 150%;
        }
        }
		a{
			text-decoration:none;
			margin-left:13%;
			font-size: 1.2rem
		}
		#second{
			margin-left:-27%;
             top: 43em;
		}

        

    </style>
</head>
<body>
    <footer style="display: flex; background-color:black;" >
        <div id="first"  style="width: 100%;
        
        margin-top:2em;
        margin-right: 2em;
        color: black;
        font-size: 1em;">
            
            <img id="imgid"  style=" width:66em;height:12em;padding: 0;background-color: white;z-index: 1;border-radius: 8px; " src="base.jpg" alt="footer">

        </div>

        <div id="second" >
             <h6 class="prop" style="color: white;">For any query contact the admin:</h6>
                
                <p style="color: white; font-size: 1.2rem;margin-top: 0; margin-bottom: 0; margin-left:15%;" class="fonts">Secretary: +91 9423444828 <br>Chairman:+91 9822489703</p>
                
				<span style="margin:1.1rem 0 0 0; color: white;">
                <a class="colors" target="_blank" href="mailto:amit.mandaliya29@gmail.com">
                     amit.mandaliya29@gmail.com
                </a><br>
               
                <a  target="_blank" class="colors" href="#">
                    <i id="facebook"  class="fab fa-facebook  fa-lg "></i>
                </a>
                
                
				<a  target="_blank" class="colors" href="#">
                    <i id="insta"  class="fab fa-twitter  fa-lg "></i>
                </a>
				
				<a  target="_blank" class="colors" href="#">
                    <i id="insta"  class="fab fa-instagram  fa-lg "></i>
                </a>
				&nbsp;
				<a  target="_blank" class="colors" href="#">
                    <i id="insta"  class="fab fa-linkedin  fa-lg "></i>
                </a>
				
            </div>
 </footer>
</body>
</html>