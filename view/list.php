<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <style> .container {padding-left: 15px; padding-right: 15px; } h4 {margin-top: 25px; } .row {margin-bottom: 20px;} .row .row {margin-top: 10px; margin-bottom: 0;} [class*="col-"] {padding-top: 15px; padding-bottom: 15px; background-color: #eee; border: 1px solid #ddd; background-color: rgba(86,61,124,.15); border: 1px solid rgba(86,61,124,.2);}    hr {margin-top: 40px;margin-bottom: 40px;} </style>
        <title>Bootstrap 101 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    </head>
    <body>
        <div class="container">

            <div class="page-header">
                <h1>Bootstrap grid examples</h1>
                <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
            </div>
            <div class="row">
                <div class="col-md-3">.col-md-3</div>
                <div class="col-md-6">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Second  Name</th>
                                <th>Email</th>
                                <th>Passworde</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $user): ?>
							<tr>
                                <td><?=$user['id']?></td>
                                <td><?php echo $user['name'];?></td>
                                <td><?php echo $user['second_name'];?></td>
                                <td><?php echo $user['email'];?></td>
                                <td><?php echo $user['password'];?></td>
                                <td><?php echo $user['role'];?></td>
                                <td>
                                    <a href="/edit/<?=$user['id']?>">Edit</a>
                                    <a href="/delete/<?=$user['id']?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-3">.col-md-3</div>
            </div>
    </body>
</html>