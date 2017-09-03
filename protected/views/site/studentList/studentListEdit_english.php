<?php

/* $dataArray - view argument
description:
$dataArray = [
    'groupName' => '',
    'groupDirection' => '',
    'studentList' => [
        [
            //student info
            'id' => '',
            'name' => '',
            'surname' => '',
            'photo_url' => '',
            'english_lvl' => '',
        ],
    ]
];
*/

?>

<div class="modal fade" id="studentListEditModal">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="container-fluid">

                <div class="studentListEdit-modal">

                    <div class="studentListEdit-side left"></div>

                    <div class="studentListEdit-middle">
                        <div class="studentListEdit-middle-header">
                            <div
                                class="studentListEdit-location"><?= $dataArray['groupName'] . " " . $dataArray['groupDirection'] ?></div>
                            <button class="studentListEdit-addStudent">Add student</button>
                        </div>

                        <div class="studentListEdit-middle-studentList">
                            <table class="studentList">
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>English level</th>
                                    <th>Download photo/CV</th>
                                    <th>Edit student info</th>
                                    <th>Remove student</th>
                                </tr>
                                <?php foreach ($dataArray['studentList'] as $student) : ?>
                                <tr>
                                    <td class="align-left"><?= $student['name'] . ' ' . $student['surname']; ?></td>
                                    <td class="align-center"><?= $student['photo_url']; ?></td>
                                    <td class="align-left"><?= $student['english_lvl']; ?></td>
                                    <td class="align-center">
                                        <img class="btn btn-default" data-toggle="modal" data-target="#downloadPhotoCV" src="<?= Yii::app()->basePath . '/../css/img/'?>b_download.png">
                                    </td>
                                    <td class="align-center">
                                        <img class="btn btn-default" data-toggle="modal" data-target="#editStudentInfo" src="<?= Yii::app()->basePath . '/../css/img/'?>b_cog.png">
                                    </td>
                                    <td class="align-center">
                                        <img class="btn btn-default" data-toggle="modal" data-target="#deleteStudentInfo" src="<?= Yii::app()->basePath . '/../css/img/'?>b_trash.png">
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                        <div class="studentListEdit-middle-footer">
                            <button type="button" class="submit">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                            <button type="button" class="close-modal" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </div>
                    </div>

                    <img class="studentListEdit-side right" src="<?= Yii::app()->basePath . '/../css/img/'?>b_forward.png">

                </div>

            </div>
        </div>
    </div>
</div>
