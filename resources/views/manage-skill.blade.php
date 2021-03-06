<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <h2 class="text-center p-3 bg-success text-white">My skill</h2>
            <div class="col-md-12">
                <button class="btn btn-success"><a href="{{url('/create-student') }}">Create skill</a></button>
                <table class="table tabel-striped">
                    <tr>
                        <th>Id</th>
                        <th>Language</th>
                        <th>Percentage</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                    @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $loop->index + 1}}</td>
                        <td>{{ $skill->language }}</td>
                        <td>{{ $skill->percentage }}</td>
                        <td><button class="btn btn-primary">Update</button></td>
                        <td><button class="btn btn-danger" onclick="deleteSkill({{ $skill->id }})" >Delete</button></td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/deleteSkill.js') }}"></script>

</body>
</html>
