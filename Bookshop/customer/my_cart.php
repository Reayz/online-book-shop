<html>
<?php
    session_start();
    require_once('../connection.php');
?>
<?php require_once('header.php');?>
    <div class='container'>
        <div class='my_cart'>
<?php
            $customer_id=$_SESSION['customer_id'];
            $product_id=$_GET['product_id'];
            $sql=mysql_query("select * from books,customer   
                    where (books.product_id='$product_id' and customer.customer_id='$customer_id')");
                    
            $data=mysql_fetch_array($sql);
            $photo=$data['photo'];
            $category=$data['category'];
            $book_name=$data['book_name'];
            $price=$data['price'];
            $author=$data['author'];
            $name=$data['name'];
            $email=$data['email'];
            $phone=$data['phone'];
            $address=$data['address'];
            $city=$data['city'];
            $division=$data['division'];
            
            $dt=new DateTime('now',new DateTimezone('Asia/Dhaka'));
            $date=$dt->format('Y-m-d');
            $time=$dt->format('h:i:s a');
        
        echo"
        
        <div class='mycart_information'> 
            <form method='post' enctype='multipart/form-data'>
                <table align='center' border='5' width='600'>
                    <tr>
                        <th width='10%'>Product Id</th>
                        <td>$product_id</td>
                    </tr>
                    <tr>
                        <th width='15%'>Photo</th>
                        <td><img src='../images/$photo' style='height: 300px;width: 300px' /></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>$category</td>
                    </tr>
                    <tr>
                        <th width='15%'>Book Name</th>
                        <td>$book_name</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>$price</td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>$author</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>$phone</td>
                    </tr>
                    <tr>
                        <th>Adress</th>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>$city</td>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <td>$division</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align='center'><input type='submit' value='Buy' name='submit' class='btn btn-success'></td>
                    </tr>   
                        
                    
                </table>
            </form>
        </div>
        ";
        if(!empty($_POST['submit'])){
                $issue_date=trim($_POST['issue_date']);
                $expiry_date=trim($_POST['expiry_date']);
                
                    $sql=mysql_query("insert into purchase values(
                                '',
                                '$product_id',
                                '$photo',
                                '$category',
								'$book_name',
                                '$price',
								'$author',
                                '$customer_id',
                                '$name',
                                '$email',
                                '$phone',
                                '$address',
                                '$city',
                                '$division',
                                '$date',
                                '$time'   
                    )");
                    
                    if(!$sql){                  
                        echo"error".mysql_error();          
                            }           
                    else{   
                            if($sql){
                                echo"<script>alert('Buy Successfull')</script>";
                                echo"<script>location.href='index.php'</script>";
                            }
                            else{
                                echo"<script>alert('issue not successfully')</script>";
                                echo"<script>location.href='mycart.php'</script>";
                            }
                        }
                    }
                    
?>
</div>
        
    </div>
    <?php require_once('footer.php');?>

    <script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>