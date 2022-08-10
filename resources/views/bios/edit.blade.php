@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit BIO</h2>

    <form method="post" action="/console/bios/edit/{{$bio->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="info">Information:</label>
            <textarea rows="4" cols="50" name="info" id="info" value="{{old('info', $bio->info)}}" required></textarea>
            
            @if ($errors->first('info'))
                <br>
                <span class="w3-text-red">{{$errors->first('info')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit BIO</button>

    </form>

    <a href="/console/bios/list">Back to BIO List</a>

</section>

@endsection