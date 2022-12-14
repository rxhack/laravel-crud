<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Employee</title>
  </head>
  <body>
    <div class="container mt-4">
        <h1>Add Employee</h1>
        

        <form action="{{url('/add-employee-post')}}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="employeeFName" class="form-control">
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="employeeLName" class="form-control">
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="">Email ID</label>
                        <input type="text" name="employeeEmailId" class="form-control">
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="">Contact No</label>
                        <input type="text" name="employeeContactNo" class="form-control">
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="">Salary</label>
                        <input type="number" name="employeeSalary" class="form-control">
                    </div>
                </div>
                
                <div class="col-xl-12">
                   <button class="btn btn-primary" type="submit">Save</button>
                   <button class="btn btn-danger"  type="reset">Reset</button>
                </div>
            </div>
        </form>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>