<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Transport</title>
    </head>
    <body>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function redirect(id) {
            window.open("/transport/"+id,"_self");
        }
    </script>

        <div class="container">
                            <h1 class="pt-md-5 pb-md-5">Achete ton transport </h1>

                            <div>
                                <div class="search">
                                    <form method="post" action="<?= Request::url()?>">
                                        {{ csrf_field() }}
                                        <label for="search">Recherche titre : </label>
                                        <input type="search" id="search" name="search"/>
                                        <input type="submit" value="Recherche"/>
                                    </form>
                                </div>

                                <div>
                                    <h2 style="color: darkred">
                                        <?php
                                            if(!empty($error)){
                                                echo $error;
                                            }
                                        ?>
                                    </h2>
                                </div>
                            </div>






            <div class="card-deck">

                <?php foreach ($transports as $transport): ?>

                        <div class="col-md-3" onclick="redirect(<?=$transport[0]?>)">
                            <div class="card shadow-sm mb-3">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">
                                        <?= $transport[1]?>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?= $transport[2] ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <h3>Prix : <span class="badge badge-secondary"> <?=$transport[7] ?> €</span> </h3>
                                </div>
                            </div>
                        </div>

                <?php endforeach; ?>

            </div>
        </div>




    </body>
</html>

