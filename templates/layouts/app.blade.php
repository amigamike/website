<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page->title }} | {{ $page->domain->site->title }}</title>

        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <link href="{{ Skin::url('css/app.css') }}" rel="stylesheet">
        <link href="{{ Skin::url('css/default.css') }}" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ Asset::url('js/app.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid">
        <div id="menu">
            <nav>
                @include('widgets.menu')
            </nav>
        </div>
        <main class="h-75">
            <div id="main-title"><span>{{ strtoupper($page->template->file) }}.C</span></div>
            <div id="main-content">
                @yield('content')
            </div>
            <div id="line-count">
                <span>{{ (!empty($page->lineNum) ? $page->lineNum : 13) }} : {{ (!empty($page->colNum) ? $page->colNum : 37) }}</span>
            </div>
        </main>
        <footer class="h-25">
            <div id="footer-content">
                <span id="footer-title">Project:&nbsp;&nbsp;{{ $page->domain->site->title }}</span>
                <div>
                    <?php
                    if (!empty($page->footer)) {
                        foreach ($page->footer as $key => $line) {
                            $start = '<p>&nbsp;&nbsp;&nbsp;';
                            if ($key == count($page->footer) -1) {
                                $start = '<p class="highlight">&diams;&nbsp;';
                            }
                            echo $start . $line . '</p>';
                        }
                    }?>
                </div>
            </div>
        </footer>
    </body>
</html>