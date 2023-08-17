<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    
</head>
<body>

            <table class="table table-striped" style="width:100%" id="example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Company Name</th>
                        </tr>
                    </thead>

                
                    <tbody>
                    @foreach($student as $students)
                        <tr>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->email }}</td>
                            <td>{{ $students->mobile }}</td>
                            <td><img src="{{ $students->image }}" class="rounded" width="100%"></td>
                            <td>{{ $students->designation }}</td>
                            <td>{{ $students->status }}</td>
                            <td>{{ $students->company_name }}</td>
                        </tr>
                    @endforeach 
                    </tbody>   
            </table>


        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script>
        //new DataTable('#example');
        $('#example').DataTable({
            pageLength: 10
        });

        </script>
    </body>
</html>