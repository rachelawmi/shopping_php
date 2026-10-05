    <?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/style.css">

<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    

}

.form-container{
    width:320px;
    
    /* display: flex;
    padding: 14px;
box-sizing: border-box;
/* box-shadow: 50px;  */
}

.field{
    width:100%;
    height:52px;
    margin:18px 0;
    padding:0 18px;
    font-size:16px;
    outline:none;
    transition:.3s;
    box-sizing:border-box;
}

/* 1. Blue Rectangle */
.blue-box{
    border:3px solid #63b3ff;
    background:#fff;
    box-shadow:0 0 0 5px rgba(99,179,255,.18);
}

/* 2. Blue Rounded */
.blue-round{
    border:3px solid #63b3ff;
    border-radius:18px;
    background:#dff1ff;
}

/* 3. Blue Tag */
.blue-tag{
    border:3px dashed #87c8ff;
    border-radius:18px;
    background:#fff;
    clip-path:polygon(10px 0,100% 0,100% calc(100% - 10px),
                      calc(100% - 10px) 100%,10px 100%,0 calc(100% - 10px),
                      0 10px);
}

/* 4. Pink Rounded */
.pink-round{
    border:3px solid #f3a7b6;
    border-radius:18px;
    background:#fff;
}

/* 5. Pink Rectangle */
.pink-box{
    border:3px dashed #f6b8c5;
    background:#fff;
}

/* 6. Pink Tag */
.pink-tag{
    border:3px dashed #f3a7b6;
    border-radius:18px;
    background:#ffe8ee;
    clip-path:polygon(10px 0,100% 0,100% calc(100% - 10px),
                      calc(100% - 10px) 100%,10px 100%,0 calc(100% - 10px),
                      0 10px);
}
.orange-box {
border: 4pxe solid aqua;
border-radius: 20px;
background: #87c8ff;
box-shadow: red;
}
.field:focus{
    transform:scale(1.02);
}
</style>
</head>
<body class="bg-light">

    <?php include('navbar.php') ?>

<div class="form-container">

    <input class="field blue-box" type="text" placeholder="Enter Your name...">

    <input class="field blue-round" type="text" placeholder="Enter Your email">

    <input class="field blue-tag" type="text" placeholder="Enter Your Phone Number...">

    <input class="field pink-round" type="text" placeholder="Enter Your location...">

    <input class="field pink-box" type="text" placeholder="Write Your Message...">

    <input class="field pink-tag" type="text" placeholder="Enter Your code...">

    <input class="field orange-box" type="text" placeholder="Enter Your country">

</div>




    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

