@extends('layouts.base')

@section('content')
    <x-step-navigation></x-step-navigation>
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
        <section class="step_content">
        @section('step_content')
        @show
        </section>
    </section>
@endsection
