@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Project</h2>

    <form method="post" action="/console/contacts/edit/{{$contact->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $contact->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Ph_no">Phone Number:</label>
            <input type="Ph_no" name="Ph_no" id="Ph_no" value="{{old('Ph_no', $contact->Ph_no)}}">

            @if ($errors->first('Ph_no'))
                <br>
                <span class="w3-text-red">{{$errors->first('Ph_no')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="email">e-mail Address:</label>
            <input type="email" name="email" id="email" value="{{old('email', $contact->email)}}">

            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>
        

        <button type="submit" class="w3-button w3-green">Edit Contact</button>

    </form>

    <a href="/console/contacts/list">Back to Contact List</a>

</section>

@endsection