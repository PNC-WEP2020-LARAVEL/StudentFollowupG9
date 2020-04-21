<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">Add students</div>
                    <div class="card-body">
                        <form action="{{route('showStudents.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Fist Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="fist name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="last name">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Gender">
                            </div>
                            <div class="form-group">
                                <label>Class</label>
                                <input type="text" name="class" class="form-control" placeholder="Class">
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <input type="number" name="year" class="form-control" placeholder="Year">
                            </div>
                            <div class="form-group">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control" placeholder="Province">
                            </div>
                            <div class="form-group">
                                <label>Picture</label>
                                <input type="text" name="picture" class="form-control" placeholder="Picture">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" placeholder="Status">
                            </div>
                            <button type="submit" class="btn btn-success">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>