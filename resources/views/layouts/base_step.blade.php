@extends('layouts.base')

@section('content')
    @section('step_tabs')
    <nav class="steps_nav">
        <ul class="steps_list">
            <li class="steps_item">
                <span>Personal info</span>
            </li>
            <li class="steps_item">
                <span>Your home</span>
            </li>
            <li class="steps_item">
                <span>Materials</span>
            </li>
            <li class="steps_item">
                <span>Extras</span>
            </li>
        </ul>
    </nav>
    @show
    <section class="step">
        <div class="step_inform">
                <div class="step_inform_header">
                    <h4>
                    @section('step_header')
                    @show
                    </h4>
                </div>
                <div class="step_inform_text">
                    <p>
                    @section('step_text')
                    @show
                    </p>
                </div>
        </div>
        @section('step_content')
        @show
    </section>
@endsection
