<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tabulator.js</title>

    <!-- Tabulator CSS -->
    <link href="https://unpkg.com/tabulator-tables@5.4.4/dist/css/tabulator.min.css" rel="stylesheet">
</head>
<body>

    <h2>User List</h2>
    <div id="user-table"></div>

    <!-- Tabulator JS -->
    <script src="https://unpkg.com/tabulator-tables@5.4.4/dist/js/tabulator.min.js"></script>
    <script>
        var table = new Tabulator("#user-table", {
            layout:"fitColumns",
            pagination:"local",
            paginationSize:5,
            ajaxURL: "/users-list",
            columns:[
                {title:"ID", field:"id"},
                {title:"Name", field:"name"},
                {title:"Email", field:"email"},
                {title:"Created At", field:"created_at"},
            ],
        });
    </script>

</body>
</html>
