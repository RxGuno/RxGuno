<?php
session_start();

if (isset ($_SESSION ['id'] ) && isset ($_SESSION ['username'])){




?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Aurora.co.cart</title>
  <link rel="stylesheet" href="cartstyle.css">
  <link rel="stylesheet" href="cartscript.js">
  
</head>
<body>
<!-- partial:index.partial.html -->

<div id="wrapper">
<div class="cart-icon-top">
</div>

<div class="cart-icon-bottom">
</div>

<div id="checkout">
	CHECKOUT
</div>



<div id="header">	
	<ul>
        <li><a href="">Home</a></li>
        <li><a href="">BRANDS</a></li>
        <li><a href="">DESIGNERS</a></li>
        <li><a href="">CONTACT</a></li>

        <div class="logout">
        <a style="text-decoration:none" href= "logout.php">Logout</a>
        </div>
       
    
    </ul>		
</div>

<div id="sidebar">
	<h3>CART</h3>
    <div id="cart">
    	<span class="empty">No items in cart.</span>       
    </div>
    
    
    
    <h3>COLORS</h3>
    <div class="checklist colors">
    	<ul>
        	<li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
    </div>
    
    <h3>SIZES</h3>
    <div class="checklist sizes">
    	<ul>
        	<li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
    </div>
    
     
</div>

<div id="grid-selector">
       <div id="grid-menu">
       	   View:
           <ul>           	   
               <li class="largeGrid"><a href=""></a></li>
               <li class="smallGrid"><a class="active" href=""></a></li>
           </ul>
       </div>
       
       
</div>

<div id="grid">
    <div class="product">
    <div class="info-large">
        	<h4>PLEATED DETAIL DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="elevate.png" alt="" />
                <div class="image_overlay"></div>
                <div class="add_to_cart">Add to cart</div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$39</span>
                        <span class="product_name">PLEATED DETAIL DRESS</span>    
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="s8.jpg" alt="" /></li>
                        <li><img src="s8.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
    <div class="product">
        <div class="info-large">
                <h4>PLEATED DETAIL DRESS</h4>
                <div class="sku">
                    PRODUCT SKU: <strong>89356</strong>
                </div>
                 
                <div class="price-big">
                    <span>$43</span> $39
                </div>
                 
                <h3>COLORS</h3>
                <div class="colors-large">
                    <ul>
                        <li><a href="" style="background:#222"><span></span></a></li>
                        <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                        <li><a href="" style="background:#9b887b"><span></span></a></li>
                        <li><a href="" style="background:#44c28d"><span></span></a></li>
                    </ul> 
                </div>
    
                <h3>SIZE</h3>
                <div class="sizes-large">
                     <span>XS</span>
                    <span>S</span>
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                    <span>XXL</span>
                </div>
                
                <button class="add-cart-large">Add To Cart</button>                          
                             
            </div>
            <div class="make3D">
                <div class="product-front">
                    <div class="shadow"></div>
                    <img src="elevate.png" alt="" />
                    <div class="image_overlay"></div>
                    <div class="add_to_cart">Add to cart</div>
                    <div class="view_gallery">View gallery</div>
                    <div class="stats">        	
                        <div class="stats-container">
                            <span class="product_price">$39</span>
                            <span class="product_name">PLEATED DETAIL DRESS</span>    
                            <p>Summer dress</p>                                            
                            
                            <div class="product-options">
                            <strong>SIZES</strong>
                            <span>XS, S, M, L, XL, XXL</span>
                            <strong>COLORS</strong>
                            <div class="colors">
                                <div class="c-blue"><span></span></div>
                                <div class="c-red"><span></span></div>
                                <div class="c-white"><span></span></div>
                                <div class="c-green"><span></span></div>
                            </div>
                        </div>                       
                        </div>                         
                    </div>
                </div>
                
                <div class="product-back">
                    <div class="shadow"></div>
                    <div class="carousel">
                        <ul class="carousel-container">
                            <li><img src="s7.jpg" alt="" /></li>
                            <li><img src="s7.jpg" alt="" /></li>
                        </ul>
                        <div class="arrows-perspective">
                            <div class="carouselPrev">
                                <div class="y"></div>
                                <div class="x"></div>
                            </div>
                            <div class="carouselNext">
                                <div class="y"></div>
                                <div class="x"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-back">
                        <div class="cy"></div>
                        <div class="cx"></div>
                    </div>
                </div>	  
            </div>	
        </div>
    
       

</div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- partial -->
<script  src="cartscript.js"></script>

</body>
</html>



<?php
}else{
    header(Location:"index.php");
    exit();
}
?>