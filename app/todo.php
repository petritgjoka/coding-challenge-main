<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="todo.php">To-Do List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privacy.php">Privacy Policy</a>
                </li>
            </ul>
        </nav>
        <br>

        <form id="todoForm" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="todoInput" placeholder="What needs to be accomplished today?" aria-label="list" aria-describedby="basic-addon2">
            </div>
        </form>

        <ul id="todoList" class="list-group list-group-flush">
            <!-- To-do items will be appended here -->
        </ul>
        <hr>
        <div class="text-center">
        <button id="clearBtn" class="btn btn-outline-secondary">CLEAR ALL</button>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#todoForm').on('submit', function(e) {
                e.preventDefault();
                let newTodo = $('#todoInput').val();
                if (newTodo) {
    let listItem = $('<li class="list-group-item d-flex justify-content-between align-items-center"></li>');
    let todoText = $('<span></span>').text(newTodo);
    let deleteBtn = $('<button class="btn btn-outline-secondary rounded-circle">X</button>');
    
    deleteBtn.on('click', function() {
        $(this).parent().remove();
    });

    // Add click event for the to-do text
    todoText.on('click', function() {
        $(this).toggleClass('completed');
    });

    listItem.append(todoText, deleteBtn);
    $('#todoList').append(listItem);
    $('#todoInput').val('');
}


            });

            $('#clearBtn').on('click', function() {
                $('#todoList').empty();
            });
        });
    </script>
</body>

</html>
