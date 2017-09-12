<div class="check-delete"></div>
<div class="loc-container">
    <header class="header box">Caesar
        <img class="profile_picture"
             src="<?php echo Yii::app()->request->baseUrl; ?><?php echo Yii::app()->user->picture; ?>">
    </header>
    <div class="left-popup"></div>
    <div class="right-popup"></div>
    <aside class="local-groups box">
        <?php require Yii::app()->basePath . '/views/site/groupList.php'; ?>
    </aside>
    <aside class="notif box">
        <button class="btn btn-default" data-toggle="modal" data-target="#studentAddModalTest">Student Add Modal
        </button>
        <button class="btn btn-default openFeedbackModal" data-toggle="modal" data-target="#studentFeedbackModal">
            Feedback Modal
        </button>
    </aside>
    <div class="center-area">
        <?php
        Yii::app()->cache->flush();
        $this->renderPartial('//site/groupArea/groupArea', ['tabViewer' => 'groupInfo']);
        ?>
    </div>

    <div class="profile_block">
        <img class="cogwheel_picture" src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/gear.png">
        <div class="user_info">
            <img class="user_picture"
                 src="<?php echo Yii::app()->request->baseUrl; ?><?php echo Yii::app()->user->picture; ?>">
            <p class="user_name">Name: <?php echo Yii::app()->user->firstname; ?></p>
            <p class="user_surname">Surname <?php echo Yii::app()->user->lastname; ?></p>

            <p class="user_role">Type <?php echo Yii::app()->user->type; ?></p>
        </div>

        <a href="<?php echo Yii::app()->createAbsoluteUrl('site/logout'); ?>">
            <img class="logout" src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/profile_logout.png">
        </a>
    </div>

    <div class="leftside-bar">
        <?php if (Yii::app()->user->type === 'itacademy') : ?>
            <a data-toggle="modal" href="#locationModal">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/globe.png" class="globe-img"
                     alt="globe icon">
            </a>
        <?php endif; ?>
    </div>


</div>
<?php require Yii::app()->basePath . '/views/site/locations.php'; ?>
<?php require Yii::app()->basePath . '/views/site/modal.php'; ?>
<?php require Yii::app()->basePath . '/views/site/edit_group.php'; ?>
<?php require Yii::app()->basePath . '/views/site/feedbackModal.php'; ?>
<?php require Yii::app()->basePath . '/views/site/studentAdd.php'; ?>
<?php require Yii::app()->basePath . '/views/site/testStudentAdd.php'; ?>
<?php require Yii::app()->basePath . '/views/studentList/editEnglish.php'; ?>
<?php require Yii::app()->basePath . '/views/studentList/editScore.php'; ?>
