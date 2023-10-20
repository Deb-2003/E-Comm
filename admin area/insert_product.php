<?php
include('../includes/connect.php');
if(isset($_POST['insert_product']))
{
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_title=$_POST['product_title'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!--bootstarp css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="../style.css">
    
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title"
                id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off"
                required="required">
           </div>
           <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description"
                id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off"
                required="required">
           </div>
           <!--keywords-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords"
                id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off"
                required="required">
           </div>
           <!--categories-->
           <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
                <option value="">Select category</option>
                <?php
                    $select_qeury="Select * from `categories`";
                    $result_query=mysqli_query($con,$select_qeury);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }   
                ?>
                <!--<option value="">Fruits</option>
                <option value="">Vegetables</option>
                <option value="">Milk Products</option>
                <option value="">Chips</option>-->
            </select>
           </div>
           <!--brands-->
           <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brands" id="" class="form-select">
                <option value="">Select brand</option>
                <?php
                    $select_qeury="Select * from `brands`";
                    $result_query=mysqli_query($con,$select_qeury);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                ?>
            </select>
           </div>
           <!--Images-->
           <!--Image1-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1"
                id="product_image1" class="form-control"
                required="required">
           </div>
           <!--Image2-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2"
                id="product_image2" class="form-control"
                required="required">
           </div>
           <!--Image3-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image1"
                id="product_image3" class="form-control"
                required="required">
           </div>
           <!--price-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price"
                id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off"
                required="required">
           </div>
           <!--price-->          
           <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert-product" class="btn btn-info mb-3 px-3" value="Insert Products">
           </div>
        </form>
    </div>
        </form>
    </div>
    
    
</body>
</html>