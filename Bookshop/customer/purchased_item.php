<html>
<?php
    session_start();
    require_once('../connection.php');
?>
    <?php require_once('header.php');?>
    <div class='container books_content'>
            <div class='row'>
                <div class='col-md-12  text-center'>
                    <?php
                        $customer_id=$_SESSION['customer_id'];
                        $sql=mysql_query("select * from customer where customer_id='$customer_id'");
                        while($data=mysql_fetch_array($sql)){
                            
                            $name=$data['name'];
                            $email=$data['email'];
                            $phone=$data['phone'];
                            echo"		
                                <div class='customer_info'>
                                      <b><u>  <h3 >User Information </h3></u></b>
                                        <h3>Name : $name </h3>
                                        <h4>Email : $email </h4>
                                        <h4>Phone : $phone </h4>
									
								</div>			
                            ";
                        }
                    ?>
                </div>
                <div class='col-md-12'>
                    <?php
                        $customer_id=$_SESSION['customer_id'];
                        $sql=mysql_query("select * from purchase where customer_id='$customer_id'");
                        while($data=mysql_fetch_array($sql)){
                            $photo=$data['photo'];
                            $product_id=$data['product_id'];
                            $book_name=$data['book_name'];
                            $price=$data['price'];
                            $author=$data['author'];
                            $date=$data['date'];

                            echo"		
                                <div class='books_image'>
                                    <img src='../images/$photo' alt='there is a image'>
                                        <h4>Name : $book_name </h4>
                                        <h4>Author : $author </h4>
                                        <h4>Price : $price </h4>
                                        <h4>Date : $date </h4>
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