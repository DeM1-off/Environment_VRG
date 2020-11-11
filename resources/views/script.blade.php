<script>
        $(document).ready(function () {

            //Add the Student
            $("#addBook").validate({
                rules: {
                    txtName: "required",
                    txtDescriptions: "required"
                },
                messages: {
                },

                submitHandler: function(form) {
                    var form_action = $("#addBook").attr("action");
                    $.ajax({
                        data: $('#addBook').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                            var book = '<tr id="'+data.id+'">';
                            book += '<td>' + data.id + '</td>';
                            book += '<td>' + data.name + '</td>';
                            book += '<td>' + data.descriptions + '</td>';
                            book += '<td><a data-id="' + data.id + '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' + data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
                            book += '</tr>';
                            $('.alert-add').prepend(' <div class=\'alert alert-success\'  >' +  data.name +'  '+ data.descriptions + '  Add Success </div>');
                            $('#BookTable tbody').prepend(book);
                            $('#addBook')[0].reset();
                            $('#addModal').modal('hide');
                        },
                        error: function (data) {
                        }
                    });
                }
            });


            //When click edit book
            $('body').on('click', '.btnEdit', function () {
                var book_id = $(this).attr('data-id');
                $.get('read/' + book_id +'/edit', function (data) {
                    $('#updateModal').modal('show');
                    $('#updateBook #hdnBookId').val(data.id);
                    $('#updateBook #txtName').val(data.name);
                    $('#updateBook #txtDescriptions').val(data.descriptions);
                })
            });
            // Update the book
            $("#updateBook").validate({
                rules: {
                    txtName: "required",
                    txtDescriptions: "required"

                },
                messages: {
                },

                submitHandler: function(form) {
                    var form_action = $("#updateBook").attr("action");
                    $.ajax({
                        data: $('#updateBook').serialize(),
                        url: form_action,
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                            var student = '<td>' + data.id + '</td>';
                            student += '<td>' + data.name + '</td>';
                            student += '<td>' + data.descriptions + '</td>';
                            student += '<td><a data-id="' + data.id + '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' + data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
                            $('.alert-add').prepend(' <div class=\'alert alert-primary\'  >' +  data.name +'  '+ data.descriptions + '  Update Success </div>');
                            $('#BookTable tbody #'+ data.id).html(student);
                            $('#updateBook')[0].reset();
                            $('#updateModal').modal('hide');
                        },
                        error: function (data) {
                        }
                    });
                }
            });

            //delete book
            $('body').on('click', '.btnDelete', function () {
                var book_id = $(this).attr('data-id');
                $.get('read/' + book_id +'/delete', function (data) {

                    $('#BookTable tbody #'+ book_id).remove();
                    $('.alert-add').prepend(' <div class=\'alert alert-danger\'  > Delete Successfully </div>');

                })
            });


        });


    </script>

