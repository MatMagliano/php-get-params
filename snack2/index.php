<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <style media="screen">
   .grey {
     float: left;
     padding: 10px;
     background-color: grey;
   }
   .green {
     float: left;
     padding: 10px;
     background-color: green;
   }

  </style>


  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="grey">
    <ul>

      <?php for ($i=0; $i < count($db['pm']) ; $i++) {
        // code...
        echo "<li>" . $db['pm'][$i]['name']. ' ' .$db['pm'][$i]['lastname'] . "</li>";
      } ?>
    </ul>
  </div>
  <div class="green">
    <ul>

      <?php for ($i=0; $i < count($db['teachers']) ; $i++) {
        // code...
        echo "<li>" . $db['teachers'][$i]['name']. ' ' .$db['teachers'][$i]['lastname'] . "</li>";
      } ?>
    </ul>
  </div>

</body>
</html>
