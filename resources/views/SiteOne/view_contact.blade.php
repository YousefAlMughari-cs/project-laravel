<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>

    <body dir="rtl">

        <div class="container my-5 px-0">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                            <th>MSG</th>
                            <th>IMAGE</th>
                            <th>CERATEDAT</th>
                            <th>UPDATEDAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->phone}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->msg}}</td>
                            <td><img style="width: 80px;" src="{{asset('uploads/' .$c->image )}}"></td>
                            <td>{{$c->created_at}}</td>
                            <td>{{$c->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </body>

</html>