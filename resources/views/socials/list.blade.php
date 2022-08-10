@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Socials</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            
         
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($socials as $social)
            <tr>
                <td>
                    @if ($social->image)
                        <img src="{{asset('storage/'.$social->image)}}" width="200">
                    @endif
                </td>
                <td>{{$social->title}}</td>
                
                <td>{{$social->created_at->format('M j, Y')}}</td>
                <td><a href="/console/socials/image/{{$social->id}}">Image</a></td>
                <td><a href="/console/socials/edit/{{$social->id}}">Edit</a></td>
                <td><a href="/console/socials/delete/{{$social->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/socials/add" class="w3-button w3-green">New Social</a>

</section>

@endsection