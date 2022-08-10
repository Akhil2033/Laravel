@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Social</h2>

    <form method="post" action="/console/socials/edit/{{$social->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $social->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $social->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

       
        

        
        <button type="submit" class="w3-button w3-green">Edit Social</button>

    </form>

    <a href="/console/socials/list">Back to Social List</a>

</section>

@endsection