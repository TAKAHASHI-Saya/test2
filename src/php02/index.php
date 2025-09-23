<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
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
        <div class="search-form_content">
            <div class="search-form_heading">
                <h2 class="search-form_content-title">日本と世界の時間を比較</h2>
            </div>
            <form action="result.php" method="get" class="search-form">
                <div class="search-form_item">
                    <select name="city" id="" class="search-form_item-select">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="オスロ">オスロ</option>
                    </select>
                </div>
                <div class="search-form_button">
                    <button class="search-form_button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>