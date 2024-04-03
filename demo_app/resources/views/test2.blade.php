<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 2</title>

    <!-- jquerry cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
    <div id="form">
        <form action="#" id="test-form" onsubmit="submitForm(event);">
            <input type="text" id="name" name="name" placeholder="Please Enter the name" required>
            <button type="submit" title="click to submit" >Submit</button>
        </form>

    </div>
</body>
<script>
    var nameArray =[];
    function submitForm(e)
    {
        e.preventDefault();
        var name = $("#name").val();
        if(name)
        {
            nameArray.push(name);
            console.log(nameArray);
            // $("#form").html('Form Submitted please see console screen for result');
        }
        else
        {
            alert('please Enter name before submit the form');
        }
    }
</script>

</html>