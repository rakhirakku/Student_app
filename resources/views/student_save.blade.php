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
            form{
            font-family: verdana; 
            color:white; 
            font-size: 16px; 
            font-style: normal;
            font-weight: bold;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
            border-collapse: collapse; 
            border: 4px solid #000000;
            border-style: dashed;
            
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
            input[type=submit], input[type=reset]{
            width: 15%;
            padding: 8px 12px;
            margin: 5px 0;
            box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <h2>Student Data Form</h3>
        <form action="api/save-record" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" maxlength="50" required>
            <br><br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" maxlength="250" rows="10" cols="50" required></textarea>
            <br><br>
            <label for="file">Image (Max 5MB):</label>
            <input type="file" id="file" name="file" accept="image/*" required>
            <br><br>
            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="1">Type 1</option>
                <option value="2">Type 2</option>
                <option value="3">Type 3</option>
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
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