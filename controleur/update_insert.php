<?Php
    include "../modele/db.php";
    
    $manage = $_GET["manage"];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $prix = $_POST["prix"];
    $quantity = $_POST["quantity"];
    $code = $_POST["code"];
    $exporation = $_POST["expiration"];

    $exucetion = new crud($manage);
    $arr = [];
    if($manage == "medicale")
    {
        $arr =["name " => $name , "category" => $category , "prix" => $prix , "quantity" => $quantity , "code" => $code , "exporation" => $exporation] ;
    }
    else{
        echo "not";
    }

    echo $arr;


    // $exucetion->insert();


    // echo $name;
    // echo "<br/>";
    // echo $prix;
    // echo "<br/>" ;   echo $category;
    // echo "<br/>"  ;  echo $quantity;
    // echo "<br/>"   ; echo $code;
    // echo "<br/>"    ;echo $exporation;
    // echo "<br/>";
?>