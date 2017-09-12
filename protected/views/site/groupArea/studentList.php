<div class="gear">
    <?php if (Yii::app()->user->type === 'itacademy') :
        $gearImg = CHtml::image(
            Yii::app()->request->baseUrl . "/css/img/gear.png",
            'gear.png',
            [
                'class' => 'gear-img',
            ]
        );

        echo CHtml::link(
            $gearImg,
            ['#'],
            [
                'data-toggle' => 'modal',
                'data-target' => '#studentListEditModal'
            ],
            [
                'onclick' => Yii::app()->createUrl('/StudentList/EditEnglish/group_id/2'),
            ]
        );

    endif; ?>
</div>
<div class="tabs">
    <?php
    $groupInfoImg = CHtml::image(
        Yii::app()->request->baseUrl . "/css/img/information.png",
        'info icon',
        [
            'class' => 'tab-icons tabInfo',
        ]
    );

    echo CHtml::ajaxLink(
        $groupInfoImg,
        ['GroupArea/GroupInfo'],
        ['update' => '.center-area'],
        ['id' => 'send-link-groupinfo']
    );
    ?>

    <?php
    $studentsImg = CHtml::image(
        Yii::app()->request->baseUrl . "/css/img/students-checked.png",
        'students.png',
        [
            'class' => 'tab-icons',
        ]
    );

    echo CHtml::link($studentsImg, '#');
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
    <div class="students-list">
        <?php
        $this->widget('zii.widgets.grid.CGridView', [
            'dataProvider' => $arrayDataProvider,
            'columns' => [
                [
                    'name' => 'first_name',
                    'type' => 'raw',
                    'value' => 'CHtml::encode($data["first_name"]) . " " . CHtml::encode($data["last_name"])',
                    'header' => 'Name',
                ],
                [
                    'name' => 'Photo',
                    'type' => 'raw',
                    'value' => 'CHtml::image(Yii::app()->request->baseUrl . $data["photo_url"], "student.png", [
                        "class" =>"student-list-photo",
                    ])'
                ],
                [
                    'name' => 'english_lvl',
                    'type' => 'raw',
                    'value' => 'CHtml::encode($data["english_lvl"])',
                    'header' => 'English level',
                ],
            ],
        ]);
        ?>
    </div>
    <div class="students-list-right-shifter">
        <?php
        $rightShifterImg = CHtml::image(
            Yii::app()->request->baseUrl . "/css/img/b_forward48.png",
            'forwardBtn.png',
            [
                'class' => 'studentIcon',
            ]
        );
        echo CHtml::ajaxLink(
            $rightShifterImg,
            ['/StudentList/ScoreTable/group_id/2'],
            ['update' => '.group-area'],
            ['id' => 'send-link-' . uniqid()]
        );
        ?>
    </div>
</div>




