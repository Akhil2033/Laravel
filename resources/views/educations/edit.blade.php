@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="/console/educations/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="school">School:</label>
            <input type="text" name="school" id="school" value="{{old('school')}}" required>
            
            @if ($errors->first('school'))
                <br>
                <span class="w3-text-red">{{$errors->first('school')}}</span>
            @endif
        </div>
        
        <div class="w3-margin-bottom">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" value="{{old('start_date')}}" required>
            
            @if ($errors->first('start_date'))
                <br>
                <span class="w3-text-red">{{$errors->first('start_date')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{old('end_date')}}" required>
            
            @if ($errors->first('end_date'))
                <br>
                <span class="w3-text-red">{{$errors->first('end_date')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Education</button>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection