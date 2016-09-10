<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platzi Blog in PHP</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m10 l8">
            <h1>
                <?= $post->getTitle() ?>
                <small>
                    <?= $post->getAuthor() ?>
                </small>
            </h1>
            <p><?= $post->getBody ?></p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>