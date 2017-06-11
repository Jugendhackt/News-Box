<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto-light">
	<title>NewsBox</title>
    <style>
        html,body{
            margin: 0px;
            border: 0px;
            width: 100%;
            height: 100%;
            background-color: #000;
            color: #fff;
            font-family: 'Roboto';
        }
        .left{
            float: left;
        }
        .img{
            width: 38%;
            height: auto;
            padding-left: 4%;
            padding-right: 2%;
        }
        .color{
            background-color: black;
        }
        .right{
            float: right;
            width: 55%;
        }
        h1{
            color: white;
        }
        .header{
            color: white;
            font-size: 48px;
            background-color: black;
            text-align: center;
        }
        nav{
            background-color: darkblue;
            margin-top: 2px;
        }
        .center{
            margin-bottom: 50%;
        }
        .link{
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 24px;
        }
        :visited{
            text-decoration: none;
        }
        :link{
            text-decoration: none;
        }
        .icon{
            height: 20px;
        }
        .post{
            margin-top: 3px;   
        }
        .right{
        }
        .container {
            color: white;
            background-color: black;
            height: 100%;
            box-sizing: border-box;
            padding: 20px;
            display: block;
        }
        .article {
            position: absolute;
            top: 60%;
            left: 40px;
            right: 40px;
        }
        .container img {
            width: 50%;
            height: 50%;
            float: left;
            padding-right: 10vw;
            
        }
    </style>
  </head>	
  <body>
      <?php
            $id = 0;
            if (isset($_GET['id'])) {
                   $id = $_GET["id"];
            }
            $json=file_get_contents("testdata.json");
            $test=json_decode($json, true);
            echo "<div class='container'><h2><center>".mb_strtoupper($test[$id]['heading'])."</h2> Stand ".$test[$id]['date']."<div class='article'>".$test[$id]['article']."</div></div>";
            if (count($test) == $id +1){
                $id = -1;
            }
        ?>
  <script>
    setTimeout(function(){
        var id = <?php echo $id+1; ?>;
        window.location = "/?id="+id;
        console.log("hallo");
    },5000);
  </script>
  </body>
</html>  
