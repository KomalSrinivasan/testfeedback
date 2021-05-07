<?php
include '../conn.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jntuno = $_POST['jntuno'];
$year = (int)$_POST['year'];
$email = $_POST['email'];
$mobile = (int)$_POST['phone_no'];
$gender = $_POST['gender'];
$sem = (int)$_POST['semester'];
$c1 = (int)$_POST['CO1_cv'];
$c2 = (int)$_POST['CO2_cv'];
$c3 = (int)$_POST['CO3_cv'];
$c4 = (int)$_POST['CO4_cv'];
$c5 = (int)$_POST['CO5_cv'];
$c6 = (int)$_POST['CO6_cv'];
$d1 = (int)$_POST['CO1_de'];
$d2 = (int)$_POST['CO2_de'];
$d3 = (int)$_POST['CO3_de'];
$d4 = (int)$_POST['CO4_de'];
$d5 = (int)$_POST['CO5_de'];
$d6 = (int)$_POST['CO6_de'];
$e1 = (int)$_POST['CO1_edc'];
$e2 = (int)$_POST['CO2_edc'];
$e3 = (int)$_POST['CO3_edc'];
$e4 = (int)$_POST['CO4_edc'];
$e5 = (int)$_POST['CO5_edc'];
$e6 = (int)$_POST['CO6_edc'];
$l1 = (int)$_POST['CO1_lca'];
$l2 = (int)$_POST['CO2_lca'];
$l3 = (int)$_POST['CO3_lca'];
$l4 = (int)$_POST['CO4_lca'];
$l5 = (int)$_POST['CO5_lca'];
$l6 = (int)$_POST['CO6_lca'];
$r1 = (int)$_POST['CO1_rvsp'];
$r2 = (int)$_POST['CO2_rvsp'];
$r3 = (int)$_POST['CO3_rvsp'];
$r4 = (int)$_POST['CO4_rvsp'];
$r5 = (int)$_POST['CO5_rvsp'];
$r6 = (int)$_POST['CO6_rvsp'];
$s1 = (int)$_POST['CO1_ss'];
$s2 = (int)$_POST['CO2_ss'];
$s3 = (int)$_POST['CO3_ss'];
$s4 = (int)$_POST['CO4_ss'];
$s5 = (int)$_POST['CO5_ss'];
$s6 = (int)$_POST['CO6_ss'];
$di1 = (int)$_POST['CO1_delab'];
$di2 = (int)$_POST['CO2_delab'];
$di3 = (int)$_POST['CO3_delab'];
$di4 = (int)$_POST['CO4_delab'];
$di5 = (int)$_POST['CO5_delab'];
$di6 = (int)$_POST['CO6_delab'];
$ed1 = (int)$_POST['CO1_edclab'];
$ed2 = (int)$_POST['CO2_edclab'];
$ed3 = (int)$_POST['CO3_edclab'];
$ed4 = (int)$_POST['CO4_edclab'];
$ed5 = (int)$_POST['CO5_edclab'];
$ed6 = (int)$_POST['CO6_edclab'];
$ss1 = (int)$_POST['CO1_sslab'];
$ss2 = (int)$_POST['CO2_sslab'];
$ss3 = (int)$_POST['CO3_sslab'];
$ss4 = (int)$_POST['CO4_sslab'];
$ss5 = (int)$_POST['CO5_sslab'];
$ss6 = (int)$_POST['CO6_sslab'];

// $filename = $file["name"];
// $filetype = $file["type"];
// $filetempname = $file["tmp_name"];
// $fileext = explode(".", $filename);
// $fileactualext = strtolower(end($fileext));
// $imgfn = $filename . "." . uniqid("", true) . "." . $fileactualext;
// $filedest = "signatures/" . $imgfn;



$prof=$_FILES['sign']['name'];
// echo($prof);


$mailsplit=(explode(".",$email));
$msplit=$mailsplit[0];
$prof_split=explode(".",$prof);
$img_name=$mailsplit[0].".".$prof_split[1];
$img_url="signature/".$img_name;
$img_full_url="Sem3/".$img_url;

if($prof_split[1]!="jpg" && $prof_split[1]!='png' && $prof_split[1]!="jpeg" && $prof_split[1]!="" && $prof_split[1]!='PNG' && $prof_split[1]!='JPG' && $prof_split[1]!='JPEG'){
    echo "Bad image";
    exit();
}
elseif($email=="" or $jntuno==""){
    echo "invalid data";
    
}
else{

        $sql = "INSERT INTO sem3 VALUES('$fname','$lname','$jntuno','$year','$email','$mobile','$gender','$sem',
        		'$c1','$c2','$c3','$c4','$c5','$c6',
        		'$d1','$d2','$d3','$d4','$d5','$d6',
        		'$e1','$e2','$e3','$e4','$e5','$e6',
        		'$l1','$l2','$l3','$l4','$l5','$l6',
        		'$r1','$r2','$r3','$r4','$r5','$r6',
        		'$s1','$s2','$s3','$s4','$s5','$s6',
        		'$di1','$di2','$di3','$di4','$di5','$di6',
        		'$ed1','$ed2','$ed3','$ed4','$ed5','$ed6',
        		'$ss1','$ss2','$ss3','$ss4','$ss5','$ss6',
        		'$img_full_url')";
        
        $result = $conn->query($sql);
        if($result){
            if(move_uploaded_file($_FILES['sign']['tmp_name'],$img_url))
                    echo "inserted sucessfull";
    $url = "../success.php";
    header('Location:'.$url);
        }
        else{
            echo mysqli_error($result);
        }
}
?>
