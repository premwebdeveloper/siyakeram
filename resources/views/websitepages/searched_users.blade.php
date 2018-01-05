@extends('layouts.public_app')

@section('content')
<div class="container" style="padding-top: 170px;">
	<div class="row light searchpage mt-10">
      	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 no-padding-sm">

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($search_results as $result)
                    <tr>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->email }}</td>
                        <td>{{ $result->phone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
 	</div>
</div>
@endsection
