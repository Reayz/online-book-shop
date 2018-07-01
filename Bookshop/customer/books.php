<html>
<?php
    session_start();
    require_once('../connection.php');
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
                                    <img src='../images/$photo' alt='there is a image'>
                                        <h4>Product_id : $product_id</h4>
                                        <h4>Book_name : $book_name</h4>
                                        <h4>Price : $price</h4>
                                        <h4>Author: $author</h4>
                                        <a href='my_cart.php?product_id=$product_id' class='btn btn-info'>Add to Cart</a>
                                </div>			
                            ";
                        }
                    ?>
                </div>


                <div class='col-md-3  text-center'>
                    <?php
                        $customer_id=$_SESSION['customer_id'];
                        $sql=mysql_query("select * from customer where customer_id='$customer_id'");
                        while($data=mysql_fetch_array($sql)){
                            
                            $name=$data['name'];
                            $email=$data['email'];
                            $phone=$data['phone'];

                            echo"		
                                <div class='customer_info'>
                                        <h3> $name </h3>
                                        <h4> $email </h4>
                                        <h4> $phone </h4>
                                        <a href='purchased_item.php' class='btn-lg btn-success'>Purchased Item</a>
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