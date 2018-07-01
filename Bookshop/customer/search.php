    <html>                  
		<?php session_start();?>
		<?php require_once('connection.php');?>
		<?php require_once('header.php');?>					
   <div class='container books_content'>
		<div class='row'>
			<div class='col-md-12'>
			<?php
				if(!empty($_POST['search'])){
					$search=trim($_POST['name']);
					$sql=mysql_query("select * from books where category='$search'");
					$count=mysql_num_rows($sql);
						if($count==0){
							echo"<font color='#aa0000'>Does not Match</font>";  
								  }
						 else{
							while($data=mysql_fetch_array($sql)){
								$photo=$data['photo'];
                                $product_id=$data['product_id'];
                                $book_name=$data['book_name'];
								$price=$data['price'];
								$author=$data['author'];
							echo"
									<div class='books_image'>
										<img src='../images/$photo' alt='there is a image'>
										<h3>Product Id : $product_id</h3>
                                        <h3>Book name : $book_name</h3>
                                        <h4>Price : $price</h4>
                                        <h4>Author : $author</h4>
										<a href='login.php' class='btn btn-info'>Add to cart</a>
									</div>
								";
									}
									  
								  }
                                                            }
			?> 
			</div>		
		</div>
	</div>
							
        
        <?php require_once('footer.php');?>
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</html>		
