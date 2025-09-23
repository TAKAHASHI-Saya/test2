<?php
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a href="/php02/index.php" class="header_logo">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="result_content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img src="img/<?php echo $tokyo['img']?>" alt="国旗" class="result-card_img">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city"><?php echo $tokyo['name']?></p>
                        <p class="result-card_time"><?php echo $tokyo['date'] . '  ' . $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img src="img/<?php echo $comparison['img']?>" alt="国旗" class="result-card_img">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city">
                            <?php echo $comparison['name']?>
                        </p>
                        <p class="result-card_time"><?php echo $comparison['date'] . '  ' . $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>