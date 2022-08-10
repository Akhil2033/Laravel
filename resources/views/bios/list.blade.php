@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Bios</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>INFO</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($bios as $bio): ?>
            <tr>
                <td>{{$bio->info}} </td>
                <td>{{$bio->created_at->format('M j, Y')}}</td>
                <td><a href="/console/bios/edit/{{$bio->id}}">Edit</a></td>
                <td><a href="/console/bios/delete/{{$bio->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/bios/add" class="w3-button w3-green">New Bio</a>

</section>

@endsection