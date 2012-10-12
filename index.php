<?
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Includ's
//require_once("php/adds.php");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Objects

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Globals variables

?>
<!doctype html>
<html lang=ru>
  <head>
  
	  <!--META's START-->
      <meta charset=utf-8>
	  <!--META's END-->
	  
      <title>HTML5</title>
	  
	  <!--CSS START-->
      <link rel="stylesheet" href="./css/style.css" />
	  <!--CSS END-->
	  
      <!--[if IE]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
	  
	  <!--Javascript START-->
	  <script src="./js/jquery-1.8.2.min.js"></script>
	  <script src="./js/script.js"></script>
	  <!--Javascript END-->
	  
 </head>
 <body>
	<!--GlobalContainer START-->
 <div id="GlobalContainer">
	  
	  <!--Header START-->
      <header class="widthController">
		<div class="logo">
            <img src="images/ava.png" alt="" />
            <ul id="login-menu">
                <li class="nickname"><a href="#">thetekst</a></li>
                <li class="log-in-out"><a href="#">LOG OUT</a></li>
            </ul>
		</div>
        <nav>
        	<ul id="main-menu">
            	<li class="nickname"><a href="#">add</a></li>
                <li class="nickname"><a href="#">refresh</a></li>
                <li class="nickname"><a href="#">tools</a></li>
            </ul>
        </nav>
        <div class="">
        	<form action="" onsubmit="return false;" method="post" name="search-form" id="search-form" enctype="multipart/form-data">
            	<label for="queryName">
                    <input name="queryName" id="queryID" value="Search..." type="text" size="40"
                    		onkeyUp="searchF();"
                            onblur="if(this.value=='' || this.value=='Введите имя') this.value='Search...';"
                            onfocus="if(this.value=='Search...' || this.value=='Введите имя') this.value='';"/>
               </label>        
            </form>
        </div>
      </header>
	  <!--Header END-->
 
	  <!--Content START-->
      <div id="content" class="widthController">
           <div id="">Пост</div>
           <aside id="sidebar_right">Боковая колонка</aside>
      </div>
	  <!--Content END-->
	  
	  <!--Footer START-->
      <footer class="widthController">
		<div id=""></div>
	  </footer>
	  <!--Footer END-->
	  
	</div>

 <!--GlobalContainer END-->
	
   </body>
</html>