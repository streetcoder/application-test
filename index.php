<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>DMS Technologies Inc</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        #people {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
            text-align: center;
            margin: 0 auto ;
            margin-top: 20px;
        }

        #people td, #people th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #people tr:nth-child(even){background-color: #f2f2f2;}

        #people tr:hover {background-color: #ddd;}

        #people th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>


</head>
<body>


    <?php

    $people = array(
        array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
        array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
        array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
        array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
        array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );

//    echo '<pre>',print_r($people,1),'</pre>';


    ?>


    <table id="people">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($people as $person){ ?>

            <tr>
                <td><?php print $person['id'] ?></td>
                <td class="first"><?php print $person['first_name'] ?></td>
                <td class="last"><?php print $person['last_name'] ?></td>
                <td class="email"><?php print $person['email'] ?></td>
                <td>
                    <button class="show">Show</button>
                </td>
            </tr>


        <?php } ?>

    </table>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>

        (function ($) {

            $('.show').click(function(){

                var $trs = $(this).closest("tr"),
                    $first = $trs.find("td.first"),
                    $last = $trs.find("td.last"),
                    $email = $trs.find("td.email");

                $alert = " Name: " + $first.text() + " " + $last.text() + "\n Email: " + $email.text();

                alert($alert);
                
            });

        })(jQuery);

    </script>
</body>
</html>
