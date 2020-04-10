<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= strtoupper($this->data['page']->name); ?>.C | <?= strtoupper($this->data['page']->site->name); ?></title>
        
        <link href="<?= $this->skin('css/app.css'); ?>" rel="stylesheet">
        <link href="<?= $this->skin('css/default.css'); ?>" rel="stylesheet" type="text/css">

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <script src="<?= $this->asset('js/app.js'); ?>" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid">
        <div id="menu">
            <nav>
                <?php
                    $this->include('widgets/menu');
                ?>
            </nav>
        </div>
        <main class="h-75">
            <div id="main-title">
                <span><?= strtoupper($this->data['page']->name); ?>.C</span>
            </div>
            <div id="main-content">