<html>
<?php
    session_start();
    require_once('connection.php');
?>
    <?php require_once('header.php');?>
    <div class='container books_content'>
            <div class='row'>
                <div class='col-md-9'>
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
                                    <img src='images/$photo' alt='there is a image'>
                                        <h4>Product_id : $product_id</h4>
                                        <h4>Book_name : $book_name</h4>
                                        <h4>Price : $price</h4>
                                        <h4>Author: $author</h4>
                                        <a href='login.php' class='btn btn-info'>Add to Cart</a>
                                </div>			
                            ";
                        }
                    ?>
                </div>


                    <div class='col-md-3 books_text text-center'>
                        <ul>
                            <h2>Categories</h2>
                            <li><a href='story.php'>Story Books</a></li>
                            <li><a href='engineering.php'>Engineering Books</a></li>
                            <li><a href='programming.php'>Programming Books</a></li>
                        </ul>
                    </div>
        </div>    
    </div>
    
	<?php require_once('footer.php');?>
        <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>