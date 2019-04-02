<?php
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
header("Location: login.php");
}
$email = $_SESSION['email'];
$sql = "SELECT * FROM main_data WHERE email= '$email'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
$name = $row['name'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABOUT US</title>
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>
    <div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-3  p-0 ">
            <nav class="navbar navbar-expand flex-md-column flex-row align-items-start py-2">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item1 hello">
                            <a class="nav-link pl-0 text-nowrap" href="dashbord.php"><i class="fa fa-home fa-fw" style="color:white;"></i> <span class="font-weight-bold logo logo__txt" style="color:white;">SMART HOME</span></a>
                        </li>
                          <span>
                                    <div class="imgcontainer d-none d-md-inline">
                                      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                                    </div>
                          </span>
                          <li>
                            &nbsp
                          </li>
                          <li>
                             <span class="ur1 d-none d-md-inline" style="color:white;">
                                 &nbsp<?php echo "$name"; ?>
                             </span>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="dashbord_profile.php"><i class="fa fa-user-circle-o fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">PROFILE</span></a> <!-- profile -->
                        </li>
                        <li>&nbsp</li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="dashbord_mng_dvi.php"><i class="fa fa-gears fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">MANAGE DEVICES</span></a>  <!-- manage devices -->
                        </li>
                        <li>&nbsp</li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="dashbord_contactus.php"><i class="fa fa-vcard-o fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">CONTACT US</span></a> <!-- contact us  -->
                        </li>
                        <li>&nbsp</li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="dashbord_aboutus.php"><i class="fa fa-id-badge fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">ABOUT US</span></a> <!-- about us -->
                        </li>
                        <li>&nbsp</li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="logout.php"><i class="fa fa-power-off fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">LOG OUT</span></a> <!--log out -->
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col next">
          <br>
          <br>
          <br>

          <h1><span class="heading">ABOUT US</span></h1>


          /* program for family tree.*/
          domains
          	person=symbol
          predicates
          	male(person)
          	female(person)
          	father(person,person)
          	mother(person,person)
          	grandfather(person,person)
          	grandmother(person,person)
          	siblings(person,person)
          	brother(person,person)
          	sister(person,person)
          	son(person,person)
          	daughter(person,person)
          	wife(person,person)
          	husband(person,person)
          	uncle(person,person)
          	aunt(person,person)
          	cousin_brother(person,person)
          	cousin_sister(person,person)
          clauses
          	male(bhikhusinh).
          	male(harendrasinh).
          	male(pankajbhai).
          	male(gulabsinh).
          	male(soham).
          	male(ganpatsinh).
          	male(raj).
          	male(jigar).
          	male(meghraj).
          	female(jaymatiben).
          	female(parvatiben).
          	female(kamuben).
          	female(bhanuben).
          	female(divyaben).
          	father(bhikhusinh,jaymatiben).
          	father(bhikhusinh,harendrasinh).
          	father(bhikhusinh,pankajbhai).
          	father(harendrasinh,raj).
          	father(harendrasinh,jigar).
          	father(pankajbhai,meghraj).
          	father(gulabsinh,soham).
          	father(ganpatsinh,bhanuben).
          	mother(kamuben,jaymatiben).
          	mother(kamuben,harendrasinh).
          	mother(kamuben,pankajbhai).
          	mother(bhanuben,raj).
          	mother(bhanuben,jigar).
          	mother(divyaben,meghraj).
          	mother(jaymatiben,soham).

          	grandfather(X,Y) :-
          male(X),
          			father(X,Z),
          		    	father(Z,Y).
          	grandmother(X,Y) :-
          			female(X),
          			mother(X,Z),
          			father(Z,Y).
          	siblings(X,Y) :-
          			father(Z,X),
          			father(Z,Y),
          			not(X=Y).
          	brother(X,Y) :-
          			male(X),
          siblings(X,Y).
          	sister(X,Y) :-
          			female(X),
          siblings(X,Y).
          	son(X,Y) :-
          			male(X),
          			father(Y,X);
          			mother(Y,X).
          	daughter(X,Y) :-
          			female(X),
          			father(Y,X);
          			mother(Y,X).
          	wife(X,Y) :-
          			female(X),
          			father(Y,Z),
          			mother(X,Z),!.

          	husband(X,Y) :-
          			male(X),
          			father(X,Z),
          			mother(Y,Z),!.

          	uncle(X,Y):-
          			male(X),
          			father(Z,Y),
          			siblings(Z,X);
          			male(X),
          			mother(Z,Y),
          			siblings(Z,X);
          			male(X),
          			mother(Z,Y),
          			siblings(R,Z),
          			husband(X,R);
          			male(X),
          			father(Z,Y),
          			siblings(Z,R),
          			husband(X,R),!.
          	aunt(X,Y) :-
          			female(X),
          			father(Z,Y),
          			siblings(Z,X);
          			female(X),
          			mother(Z,Y),
          			siblings(Z,X);
          			female(X),
          			father(Z,Y),
          			siblings(R,Z),
          			wife(X,R);
          			female(X),
          			mother(Z,Y),
          			siblings(Z,R),
          			wife(X,R),!.
          cousin_brother(X,Y):-
          				male(X),
          				father(Z,X),
          				uncle(Z,Y).
          	cousin_sister(X,Y):-
          				female(X),
          				father(Z,X),
          				uncle(Z,Y).

     </main>
    </div>
</div>
  </body>
</html>
