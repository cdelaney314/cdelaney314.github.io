<!DOCTYPE html>
<html>
<head>
    <title>Connor Delaney: Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <a class="navbar-brand" href="#">Connor Delaney</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-body" aria-controls="navbar-body" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-body">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
            </ul>
        </div>
        
    </nav>

    <div style="width: 100%;">
        <div id="weather" style="width: 50%; height: 100px; float: left; text-align: center; padding: 10px; border: 15px
            <?php
                $mins = 24;
                //$mins = 0;
                if($mins <= 30){
                    echo "solid green;\">";
                    echo "<h1 style=\"color: green\"><strong>";
                }
                else{
                    echo "solid red;\">";
                    echo "<h1 style=\"color: red\"><strong>";
                }

                //echo $seconds."s=";
                echo $mins." mins</strong></h1>";
            ?>
        </div>
        <div id="traffic" style="margin-left: 50%; height: 100px; border: 15px solid red;"></div>
    </div>

    <iframe id="shark-map" src="https://www.dorsalwatch.com/report/index.html?country=3" style="width:100%; height: 300px;" title="Shark Watch"></iframe>

    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

