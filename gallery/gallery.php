<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallery</title>

        <!-- Styles Link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="gallery.css">
    </head>
    <body>
        <div class="container text-center">

            <h3 class="text-center text-uppercase">Gallery</h3>
            <hr>

            <?php
            $numI = 0;
            ?>
            <div class="gallery text-center">
                <?php
                while ($numI <= 8):
                    $numI++;
                    ?>
                    <div class="thumb img-thumbnail">
                        <img src="http://fakeimg.pl/300x150/" class="img-responsive">
                        <a class="del" href="#delete">
                            <button type="button" class="close close-thumb" data-toggle="popover" data-placement="right" data-content="Delete">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </a>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

        </div>

        <!-- Scripts Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script>
//            $('.close').tooltip();;
            $('.close').popover()
        </script>

    </div>
</body>
</html>
