@extends('layouts.main')

@section('content')
    <h1 class="is-size-1">Upload Image(s) to Check Grade of Wagyu</h1>
    <br>
    <h1>A1, A2, A3, A4, or A5</h1>

    <br>
    <br>

    <form action="{{ route('images.store') }}" method="POST">
        <div class="file has-name is-boxed">
            <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Choose a file…
                    </span>
                </span>
                <span class="file-name">
                    Screen Shot 2017-07-29 at 15.54.25.png
                </span>
            </label>
        </div>

        <br>
        <button type="submit" class="button is-primary">Submit</button>
    </form>

@endsection
