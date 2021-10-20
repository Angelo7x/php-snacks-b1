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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        .container {
            display: flex;
            width: 80%;
            margin: 0 auto;
            text-align: center;
            justify-content: center;
            padding: 20px;
        }

        .gray_container {
            width: 300px;
            height: 100px;
            background-color: gray;
            padding: 20px;
            margin-right: 20px;
        }

        .green_container {
            width: 300px;
            height: 100px;
            background-color: green;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="gray_container">
        <ul>
            <?php foreach($db["teachers"] as $insegnanti) { ?>
            <li>
                    <?php echo $insegnanti["name"] ?>
                    <?php echo $insegnanti["lastname"] ?>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="green_container">
        <ul>
            <?php foreach($db["pm"] as $insegnanti) { ?>
            <li>
                    <?php echo $insegnanti["name"] ?>
                    <?php echo $insegnanti["lastname"] ?>
            </li>
            <?php } ?>
        </ul>
    </div>
    </div>
</body>
</html>