<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Story 4 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <!--    <script src="/src/js/group.js"></script>-->
<!--    <script src="/src/js/main.js"></script>-->
    <!--<script src="/build/group.bundle.js"></script>-->
</head>
<body>
<div class="container-fluid" id="modal">
    <div id="groups">
        <div id="dashed" class="row">
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="groupName">Croup Name:</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="error">
                    <span class="errorName"></span>
                </div>
                <input type="text" name="groupName" class="groupName" title="groupName" required>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="budgetOwner">Budget owner</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active" id="SsOwner">
                        <input type="radio" name="budgetOwner" value="SoftServe" class="SoftServe"> SoftServe
                    </label>
                    <label class="btn btn-default" id="OgOwner">
                        <input type="radio" name="budgetOwner" value="Open group" class="Open-group"> Open group
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="direction">Direction</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <select class="direction" title="direction" required>
                    <option>MQC</option>
                    <option>PHP</option>
                </select>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="startDate">Start date:</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="error">
                    <span class="errorDate"></span>
                </div>
                <input type="date"  name="startDate" title=startDate" class="startDate">
            </div>
        </div>
        <br>
        <div id="dashed" class="row">
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="location">Location</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <select class="location" title="location" disabled>
                    <option>Locations</option>
                </select>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="finishDate">Finish date:</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <input type="date"  name="finishDate" title="finishDate" class="finishDate" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="teachers">Teachers</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="teachers-container">
                    <select class="teachers" title="teachers">
                    </select>
                    <div class="teachers-selects-container">
                        <br>
                    </div>
                </div>
                <br>
                <a href="#" class="add-teacher">
                    <span class="glyphicon glyphicon-plus"> one more teacher</span>
                </a>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2">
                <label for="experts">Experts</label>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="error">
                    <span class="errorExperts"></span>
                </div>
                <input type="text" class="experts" title="experts">
                <div class="experts-container">
                    <br>
                </div>
                <br>
                <a href="#" class="add-expert">
                    <span class="glyphicon glyphicon-plus"> one more expert</span>
                </a>
            </div>
        </div>
        <br>
        <div class="button-area">
            <button type="button" class="submit">
                <span class="glyphicon glyphicon-ok"></span>
            </button>
            <button type="button" class="close-modal">
                <span class="glyphicon glyphicon-remove"></span>
            </button>
        </div>
    </div>
</div>

<style>
    body {
        min-width: 350px;
    }

    div#modal{
        margin-top: 5%;
        background-color: #171B65;
    }

    div#dashed{
        border-bottom: dashed 1px grey;
    }

    #groups {
        width: 80%;
        height: 80%;
        margin-top: 4%;
        margin-left: 10%;
        margin-bottom: 2%;
        background-color: white;
        padding: 5%;
        border-radius: 7px;
    }

    .button-area{
        text-align: center;
    }

    .submit, .close-modal {
        display: inline-block;
        width: 50px;
        height: 50px;
        cursor: pointer;
        border-radius: 50%;
        box-shadow: 0 2px 0 rgba(0,0,0,.1)
    }

    .submit{
        background-color: #171B65;
    }

    .close-modal {
        background-color: #00b3ee;
    }

    .submit > span {
        color: white;
    }

    .close-modal > span {
        color: white;
    }

    .add-expert, .add-teacher{
        color: black;
    }

    .errorName, .errorExperts, .errorDate{
        color:red;
    }

    input, select {
        min-width: 200px;
        height: 30px;
        border: solid 2px black;
        border-radius: 2px;
        box-shadow: 0 0 10px black;
    }

</style>

</body>
</html>