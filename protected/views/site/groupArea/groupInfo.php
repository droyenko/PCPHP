<?php
if (empty($groupName)) {
    $groupName = "<br>";
}
?>

<div class="loc-name box"><?php echo $groupLocationName; ?></div>
<div class="group-name box"><?php echo $groupName; ?></div>
<div class="status box">Stage: in process</div>
<div class="message box">Some message</div>
<main class="group-area box">
    <?php if ($groupId != '') : ?>
        <div class="gear">
            <?php
            if (Yii::app()->user->type === 'itacademy') :
                $gearImg = CHtml::image(
                    Yii::app()->request->baseUrl . "/css/img/gear.png",
                    'gear.png',
                    [
                        'class' => 'gear-img',
                    ]
                );
                $trashImg = CHtml::image(
                    Yii::app()->request->baseUrl . "/css/img/trash.jpg",
                    'trash bin icon',
                    [
                        'class' => 'trash-img',
                    ]
                );

                echo CHtml::ajaxLink(
                    $gearImg,
                    ["GroupArea/Modal"],
                    ['update' => '#groupModal'],
                    ['id' => 'send - link - ' . uniqid(),
                        'data - toggle' => 'modal',
                        'data - target' => '#groupModal'
                    ]
                );

                echo CHtml::link(
                    $trashImg,
                    "/Group/Delete/{$groupId}",
                    [
                        'class' => 'delete-group',
                    ]
                );

            endif; ?>
        </div>
        <div class="tabs">
            <a href="#">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/information-checked.png"
                     class="tab-icons tabInfo" alt="info icon">
            </a>

            <?php
            $groupId = '2';
            $studentsImg = CHtml::image(
                Yii::app()->request->baseUrl . "/css/img/students.png",
                'students.png',
                [
                    'class' => 'tab-icons',
                ]
            );
            echo CHtml::ajaxLink(
                $studentsImg,
                ["StudentList/EnglishTable/groupid/{$groupId}"],
                ['update' => '.group-area'],
                ['id' => 'send-link-students']
            );
            ?>

            <a href="#">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/schedule.png"
                     class="tab-icons tabSchedule" alt="schedule icon">
            </a>
            <a href="#">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/envelope.png"
                     class="tab-icons tabNotification" alt="envelope icon">
            </a>
        </div>
        <div class="group-area-content">
            <div class="group-coordination"><span class="text">Group coordination:</span></div>
            <div class="group-info"><span class="text">Group info:</span></div>
            <table class="coordination-table group-info-tables">
                <tr>
                    <th><br/></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Teacher</td>
                    <td>
                        <?php echo $groupTeachers; ?>
                    </td>
                </tr>
                <tr>
                    <td>Expert</td>
                    <td>
                        <?php echo $groupExperts; ?>
                    </td>
                </tr>
            </table>
            <table class="info-table group-info-tables">
                <tr>
                    <th><br/></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Date start:</td>
                    <td class="start-date-table"><?php echo $groupStartDate; ?></td>
                </tr>
                <tr>
                    <td>Date finish:</td>
                    <td class="finish-date-table"><?php echo $groupFinishDate; ?></td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
</main>