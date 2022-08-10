@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>School</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($educations as $education): ?>
            <tr>
                <td>{{$education->title}} </td>
                <td>{{$education->school}} </td>
                <td>{{$education->start_date}} </td>
                <td>{{$education->end_date}} </td>

                <td>{{$education->created_at->format('M j, Y')}}</td>
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>

</section>

@endsection