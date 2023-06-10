<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style>   
            h2{
            font-family: Sans-serif; 
            font-size: 24px;     
            font-style: normal; 
            font-weight: bold; 
            color: blue;
            text-align: center; 
            text-decoration: underline
            }
            table{
            font-family: verdana; 
            color:white; 
            font-size: 16px; 
            font-style: normal;
            font-weight: bold;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
            border-collapse: collapse; 
            border: 4px solid #000000;
            
            }
            table.inner{
            border: 10px
            }
            input[type=text], input[type=email], input[type=number]{
            width: 50%;
            padding: 6px 12px;
            margin: 5px 0;
            box-sizing: border-box;
            }
            button[type=submit], input[type=reset]{
            width: 15%;
            padding: 8px 12px;
            margin: 5px 0;
            box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <center>
        <form action="api/save-record" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <h2>Student Data Form</h3>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <label for="name">Name:</label>
                    </td>
                    <td>
                        <input type="text" id="name" name="name" maxlength="50" required>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="description">Description:</label>
                    </td>
                    <td>
                        <textarea id="description" name="description" maxlength="250" rows="10" cols="50" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="file">Image (Max 5MB):</label>
                    </td>
                    <td>
                    <input type="file" id="file" name="file" accept="image/*" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="type">Type:</label>
                    </td>
                    <td>
                        <select id="type" name="type" required>
                            <option value="1">Type 1</option>
                            <option value="2">Type 2</option>
                            <option value="3">Type 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <center><button type="submit">Submit</button></center>
                    </td>
                <tr>

        </form></center>
    </body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" >
    // $(document).on('click', '#add_btn', function(event) {
    //         event.preventDefault();
    //         var name = $('#name').val();
    //         var description = $('#description').val();
    //         var type = $('#type').val();
    //         var file = $('#image').val();
    //         var url = "store";
    //         $.ajax({
    //             type: "POST",
    //             url: url,
    //             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //             data: "name="+name+"&description="+description+"&type="+type+"&file="+file,
    //             beforeSend: function () {
    //                 // $('body').LoadingOverlay("show");
    //             },
    //             success: function (data) { 
    //                 console.log(data);
    //                 alert(data);
    //             },
    //             complete: function () {
    //                 // $('body').LoadingOverlay("hide");
    //             }
    //         });   
    // });
</script>