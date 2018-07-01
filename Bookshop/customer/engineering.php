<html>
<?php
    session_start();
    require_once('../connection.php');
?>
    <?php require_once('header.php');?>
    <div class='container books_content'>
            <div class='row'>
			<center><h2>Engineering Books</h2></center>
                <div class='col-md-12'>
                    <?php
                        $sql=mysql_query("select * from books where category='engineering'");
                        while($data=mysql_fetch_array($sql)){
                            $photo=$data['photo'];
                            $product_id=$data['product_id'];
                            $book_name=$data['book_name'];
                            $price=$data['price'];
                            $author=$data['author'];

                            echo"			
                                <div class='books_image'>
                                    <img src='../images/$photo' alt='there is a image'>
                                        
                                        <h4>Name : $book_name</h4>
                                        <h4>Author : $author</h4>
										<h4>Price : $price</h4>
                                        
                                        <h2 align='center'><a href='my_cart.php?product_id=$product_id' class='btn btn-info'>Buy</a></h2>
                                </div>			
                            ";
                        }
                    ?>
                </div>

        </div>    
    </div>
	<?php require_once('footer.php');?>

	    <script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>