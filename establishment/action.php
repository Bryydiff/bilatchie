<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establishment Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-3 mb-4">Establishment Information Form</h2>
        <form action="submit_form.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="barangay">Barangay:</label>
                        <input type="text" class="form-control" id="barangay" name="barangay" value="Sto. Thomas" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="proprietor">Proprietor:</label>
                        <input type="text" class="form-control" id="proprietor" name="proprietor" placeholder="Enter the name of the proprietor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="purok">Purok:</label>
                        <input type="text" class="form-control" id="purok" name="purok" placeholder="Enter the purok">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter the complete address of the establishment">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="establishmentName">Establishment Name:</label>
                        <input type="text" class="form-control" id="establishmentName" name="establishmentName" placeholder="Enter the name of the establishment">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nationalID">National ID:</label>
                        <input type="text" class="form-control" id="nationalID" name="nationalID" placeholder="Enter the national ID of the establishment">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" onclick="showSuccessAlert()">Submit</button>
        </form>
    </div>
    <script>
        function showSuccessAlert() {
            alert("Record inserted successfully");
        }
    </script>
</body>

</html>