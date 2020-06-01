<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/baseStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=PT+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container box container-box">
        <h1 id="title">Todo</h1>
        <br />
        <!--Table starts-->
        <div>
            <br />
            <div>
                <button type="button" name="add" id="add" class="btn btn-info add-btn">+ Add item</button>
            </div>
            <br />
            <div id="alert_message"></div>
            <table id="user_data" class="table  table-back">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th id="options"></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script src="script/script.js"></script>
</body>
</html>