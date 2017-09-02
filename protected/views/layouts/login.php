<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/mainPage/main_page.css">

    <script src="<?= Yii::app()->request->baseUrl; ?>/js/login/login.js"></script>

    <title><?= CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <header class="header box">SoftServe</header>
    <?= $content; ?>
    <div class="clear"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var loginForm = document.querySelector('.login');
            var login = new Login(loginForm);
        });
    </script>

</body>
</html>
