<?php 
$result = null;
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator']; 
    if($operator == '+'){
        $result = $number1 + $number2;
    }elseif($operator == '-'){
         $result = $number1 - $number2;
    }elseif($operator == '*'){
         $result = $number1 * $number2;
    }elseif($operator == '/'){
         $result = $number1 / $number2;
    }else{
        $result = "Invalid Operator";
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <label for="" class="w-100">
                                Insert Your Number
                                <input type="number" name="number1" class="form-control" id="input" placeholder="Enter Your Number">
                            </label>
                            <label for="" class="w-100 mt-3">
                                Insert Your Number
                                <input type="number" name="number2" class="form-control" id="input" placeholder="Enter Your Number">
                            </label>
                            <label for="" class="w-100 mt-3">
                            Insert Your Oparetor  <small class="text-danger">(+, -, *, /)</small>
                                <input type="text" name="operator" class="form-control" id="input" placeholder="Enter Your Number">
                            </label>
                            <div class="d-grid mt-3">
                                <button type="submit" name="submit" class="btn btn-outline-primary" id="btn">Calculate</button>
                            </div>
                        </form>
                        <hr>
                        <?php if ($result != null){
                             ?>
                       <h2 class="mt-4">Result is : <?php echo $result ?? null; ?></h2>
                          <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>