<?php
    include "../controleur/controle.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>

    <section class="dashboard">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-12">
                <div class="side_bar">
                    <a href="#">
                        <div class="item_menu">Manage medicale</div>
                    </a">
                    <a href="#">
                        <div class="item_menu">Manage employe</div>
                    </a>
                    <a href="#">
                        <div class="item_menu">Manage client</div>
                    </a>
                    <a href="#">
                        <div class="item_menu">Manage commande</div>
                    </a>
                </div>

            </div>
            <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-8 col-sm-8 col-sm-12">
            <div class="centent_dashboard" id="dashboard_on">
                <div class="manage_post">
                <h2>Search</h2>
										<input type="text" class="inpsearch" list="mysearch" placeholder="All category">
                                            <datalist id="mysearch">
                                                <option value="All category">
                                                <option value="hair_medicale">
                                                <option value="face_medicale">
                                                <option value="food_medicale">
                                                <option value="eyes_medicale">
                                            </datalist>
                                        <button class="category_search" onclick="search()">Valide</button>
                <h1>Manage MEDICALE</h1>

                <button>Add medicale</button>

                <div class="table_post">
                <table cellspacing="0" cellpadding="0">
						<tr>
                            <th>AR</th>
                            <th>Name</th>
                            <th>Catégory</th>
                            <th>Prix</th>
                            <th>Quantity</th>
                            <th>EXprition</th>
                            <th>Code</th>
                            <th>Action</th>

                            <?php

                                $category = $_GET['category'];
                                $requet_1 = new crud("medicale");
                                if($category == "" || $category == "All category")
                                {
                                    $medicale = $requet_1->select();
                                }
                                else{
                                    $medicale = $requet_1->select(["category" => $category]);
                                }
                                $i = 1;
                                  foreach ($medicale as $value) {                                      
                            ?>

						</tr>
											</td>
                                            <td class="AR"><?php  echo $i ?></td>
											<td class="AR"><?php  echo $value["name"] ?></td>
											<td class="titre"><?php  echo $value["category"] ?></td>
                                            <td class="auteur"> <?php  echo $value["prix"]?> </td>
                                            <td class="date"><?php  echo $value["quantity"] ?></td>
                                            <td class="titre"><?php  echo $value["expiration"] ?></td>
                                            <td class="auteur"> <?php  echo $value["code"] ?> </td>
											<td>
												<div class="icon_crud">
													<a href="#">
														<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													</a>
													<a href="#">
														<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg>
													</a>
													<a href="#">
														<svg  xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
													</a>
												</div>
											</td>
						</tr>
                        <?php
                              $i++;
                                }
                        ?>


                </table>
                </div>
                </div>


            </div>
            </div>


            </div>
        </div>

     
     </section>


    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>

        var search = () =>{
            let category =document.querySelector(".inpsearch").value;
            window.location ="dashboard.php?category=" + category;
            console.log(category);
        }

        // var search = () =>{
        //     let category = document.querySelector(".category_search").value;
        //     // window.location ="index.php?topic=" + valide_input_value;
        //     console.log(category);
        // }

        // let valide_input = document.querySelector(".valide_input");
        // valide_input.addEventListener("click", () =>{
        //     let valide_input_value = document.querySelector(".valide_input");
        //     console.log(valide_input_value.value);
        //     // window.location ="index.php?topic=" + topic;
        // })

    </script>
</body>
</html>