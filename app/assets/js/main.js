$(document).ready(function() {
    $('#todoForm').on('submit', function(e) {
        e.preventDefault(); 
        let newTodo = $('#todoInput').val();
        if (newTodo) {
            let listItem = $('<li class="list-group-item d-flex justify-content-between align-items-center"></li>').text(newTodo);
            let deleteBtn = $('<button class="delete-btn btn btn-sm btn-outline-danger rounded-circle">X</button>');

            deleteBtn.on('click', function() {
                $(this).parent().remove();
            });

            listItem.append(deleteBtn);
            $('#todoList').append(listItem);
            $('#todoInput').val('');
        }
    });
});
