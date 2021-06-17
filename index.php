<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
            include("includes/head.inc.php");
        ?>
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <?php
           include("includes/menu.inc.php");
           ?>
    </div> <!-- end of menu -->
  
        <!-- start page -->

                <div id="page">
                    <!-- start content -->
                    <div id="content">
                        <div class="post">
                            <h1 class="title">
                            	<center>

                            <?php 
                             
                                if(isset($_SESSION['status']))
                                {
                                    echo $_SESSION['unm']; 
                                }
                                else
                                {   
                                    echo 'Book Deals ';
                                } 
                            ?>
                            </h1>
                        </center>
                           
                            
                        </div>
                        
                    </div>
        
        <div id="templatemo_new_books">
        	<ul>
                
            </ul>
            
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	                <ul>
                    <?php
                                include("includes/search.inc.php");
                            ?>
                    </div>
                   
            	</ul>
            </div>
			
            
            <div class="templatemo_content_left_section">                
                <a></a>
<a></a>
			</div>
        </div> <!-- end of content left -->
        
         <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1>Guns, Germs, and Steel <span>(by James Derion)</span></h1>
          <img src="images/xou.jpg" alt="image" />
                <div class="product_info">
                    <p>The book attempts to explain why Eurasian and North African civilizations have survived and conquered others</p>
                  <h3>RS:876</h3>
                    <div class=""><a href="http://localhost/book-store/detail.php?id=72&cat=Culture">Buy Now</a></div>
                   
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>

          <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
                <h1>Cooking  <span>(by Sheron Author)</span></h1>
            <img src="images/366363.jpg" alt="image" />
                <div class="product_info">
                    <p>Astrophysics for People in a Hurry</p>
                    <h3>RS:400</h3>
                    <div><a href="http://localhost/book-store/detail.php?id=73&cat=Science">Buy Now</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>

   


         <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1>Mahatma Gandhi  <span>(by Best Author)</span></h1>
          <img src="images/ototot.jpg" alt="image" />
                <div class="product_info">
                    <p>All you need to know about indian Freedom</p>
                  <h3>RS:370</h3>
                    <div><a href="http://localhost/book-store/detail.php?id=70&cat=Biography">Buy Now</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <br>


 <div class="cleaner_with_width">&nbsp;</div>
   <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1>Super Heroes: The Ultimate Pop-Up Book <span>(by D.C)</span></h1>
          <img src="images/obs.jpg" alt="image" />
                <div class="product_info">
                    <p>Explore the latest Comics BY D.C</p>
                  <h3>RS:600</h3>
                    <div><a href="http://localhost/book-store/detail.php?id=75&cat=Comics">Buy Now</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>


            <div class="cleaner_with_width">&nbsp;</div>
   <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1>Super Heroes: The Ultimate Pop-Up Book <span>(by D.C)</span></h1>
          <img src="images/obs.jpg" alt="image" />
                <div class="product_info">
                    <p>Explore the latest Comics BY D.C</p>
                  <h3>RS:600</h3>
                    <div><a href="http://localhost/book-store/detail.php?id=75&cat=Comics">Buy Now</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>


    <div class="cleaner_with_width">&nbsp;</div>
   <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1>Super Heroes: The Ultimate Pop-Up Book <span>(by D.C)</span></h1>
          <img src="images/lopp.jpg" alt="image" />
                <div class="product_info">
                    <p>Explore the latest Comics BY D.C</p>
                  <h3>RS:600</h3>
                    <div><a href="http://localhost/book-store/detail.php?id=75&cat=Comics">Buy Now</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>

      
      
        <div class="cleaner_with_height">&nbsp;</div>
        
           


<?php
            include("includes/footer.inc.php");
        ?>
</head><!-- templatemo 086 book store -->
<!-- 
Book Store Template 
http://www.templatemo.com/preview/templatemo_086_book_store 
-->
</body>
</html>