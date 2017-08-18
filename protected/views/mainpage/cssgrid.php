<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../css/main.css"/>
    <link rel="stylesheet" href="../../../css/groupInfo.css"/>
    <link rel="stylesheet" href="../../../css/studentList.css"/>
    <link rel="stylesheet" href="../../../css/schedule.css"/>
    <link rel="stylesheet" href="../../../css/notifications.css"/>
    <title>Title</title>
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
    <main class="group-area box">
        <div class="gear">
            <a href="...">
                <img src="../../../css/img/gear.png" class="gear-img" alt="gear icon">
            </a>
        </div>
        <div class="tabs">
            <a href="...">
                <img src="../../../css/img/information-checked.png" class="tab-icons tabInfo" alt="info icon">
            </a>
            <a href="...">
                <img src="../../../css/img/students.png" class="tab-icons tabStudents" alt="students icon">
            </a>
            <a href="...">
                <img src="../../../css/img/schedule.png" class="tab-icons tabSchedule" alt="schedule icon">
            </a>
            <a href="...">
                <img src="../../../css/img/envelope.png" class="tab-icons tabNotification" alt="envelope icon">
            </a>
        </div>
        <?php require 'groupInfo.php'; ?>
    </main>
</div>

</body>
</html>

