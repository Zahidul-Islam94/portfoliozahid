@extends('layout.app')

@section('title','Skills')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-head">
                <h2>My skill</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Lanuage</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                        <tr>
                            <td> {{ $skill->language }}</td>
                            <td> {{ $skill->percentage }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
