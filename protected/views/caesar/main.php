<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/locations.css"/>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/Frame.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/LocationsList.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/locationsExecute.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
    <header class="header box">SoftServe</header>
    <div class="loc-name box">Dnipro</div>
    <div class="group-name box">Dp-119 Php</div>
    <div class="status box">Stage: in process</div>
    <div class="message box">Some message</div>
    <aside class="local-groups box">Groups in location</aside>
    <aside class="notif box">Notifications</aside>
    <main class="group-area box">Group area</main>
</div>

</body>
</html>
