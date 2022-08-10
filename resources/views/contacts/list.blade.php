@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Contacts</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>title</th>
            <th>Ph_no</th>
            <th>email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($contacts as $contact): ?>
            <tr>
                <td>{{$contact->title}}</td>
                <td>{{$contact->Ph_no}}</td>
                <td>{{$contact->email}}</td>

                <td>{{$contact->created_at->format('M j, Y')}}</td>
                <td><a href="/console/contacts/edit/{{$contact->id}}">Edit</a></td>
                <td><a href="/console/contacts/delete/{{$contact->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/contacts/add" class="w3-button w3-green">New Contact</a>

</section>

@endsection