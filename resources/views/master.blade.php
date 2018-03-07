<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mark Law | Folio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    @include('partials.csslinks')
</head>
<body>
 @include('partials.navbar')
 <div class="ui pushable segment">
    <div class="ui sidebar inverted vertical borderless menu">
        <a class="item">Menu Item 0</a>
        <a class="item">Facebook</a>
        <a class="item">Instagram</a>
        <a class="item">Twitter</a>
        <a class="item">About</a>
        <a class="item">Contact</a>
    </div>
    <div class="pusher">
        <div id="content">
            <div class="ui grid">
                <div class="row">
                    <div class="right floated left aligned column">
                        <button id="share" class="ui right floated button">
                            <i class="share alternate icon"></i>
                            Share
                        </button>
                    </div>
                </div>
                <div class="row">
                    @include('contents.lefboard')
                    @include('contents.rytboard')
                </div>
            </div>
            @include('partials.footer') 
        </div>
    </div>
</div>

    @include('partials.scripts')
</body>
</html>