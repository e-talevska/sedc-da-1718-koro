<html>
    <head>
        <title>About</title>
    </head>
    <body>
        <h1>Hello</h1>
        <p><?= $name . ", " . $year; ?></p>
        <?php foreach($classes as $class) { ?>
            <p><?= $class; ?></p>
        <?php } ?>
            
            @foreach($classes as $class)
                <p>{{ $class }}</p>
            @endforeach
    </body>
</html>
