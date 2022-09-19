<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="register_process.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fname">fname</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">status</label><br>
                        <input Type="radio"  name="status" value="1"> ใช้งาน <input Type="radio" name="status" value="2"> ไม่ใช้งาน
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lname">lname</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    
                </div>
            </div>
            <button Type="submit" class="btn btn-success">submit</button>
        </form>
    </div>
</body>
</html>