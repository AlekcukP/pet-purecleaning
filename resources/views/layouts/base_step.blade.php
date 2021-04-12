@extends('layouts.base')

@section('content')
    <x-step-navigation steps-value></x-step-navigation>
    <section class="step">
        <article class="step_inform">
                <div class="step_inform_header">
                    <h4>
                    @section('step_header')
                    @show
                    </h4>
                </div>
                <div class="step_inform_text">
                    <p>
                    @section('step_description')
                    @show
                    </p>
                </div>
        </article>
        <form class="step_content" action="@yield('form_action')"  method="post" id="@yield('form_id')">
            @csrf
        @section('step_content')
        @show
        </form>
        <div class="step_button">
            <button type="submit" id="@yield('button_id')" form="@yield('form_id')">@yield('steps_left')</button>
        </div>
    </section>
@endsection
