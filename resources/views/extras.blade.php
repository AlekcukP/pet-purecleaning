@extends('layouts.base_step')

@section('step_header', 'Now choose some extras to finish up')
@section('step_description', 'Almost there, hang on were at the end')
@section('button_id', 'reserve_button')
@section('steps_left', 'Reserve a Cleaning')
@section('form_action', '/extras')

@section('step_content')
<x-base-block>
    <x-block-item question="Select extras">
        <x-input-icon custom-class="icon_fridge" id="extra_fridge" name="extra_fridge" value="1">Inside fridge</x-input-icon>
        <x-input-icon custom-class="icon_oven" id="extra_oven" name="extra_oven" value="1">Inside oven</x-input-icon>
        <x-input-icon custom-class="icon_garage" id="extra_garage" name="extra_garage" value="1">Garage swept</x-input-icon>
        <x-input-icon custom-class="icon_laundary" id="extra_laundary" name="extra_laundary" value="1">Laundary Wash & Dry</x-input-icon>
        <x-input-icon custom-class="icon_blinds" id="extra_blinds" name="extra_blinds" value="1">Blinds Cleaning</x-input-icon>
    </x-block-item>
</x-base-block>

<div class="price">
        <div class="price_header price_block">
            <span>Cleaning price</span>
        </div>
        <div class="price_detail price_block">
            <div>
                <span>{{ $details['cleaning_frequency'] }} </span><span>Cleaning</span>
            </div>
            <div>
                <span>{{ $details['cleaning_date'] }}</span>
            </div>
            <div>
                <span>{{ $details['bedrooms'] }}</span> bed, 
                <span>{{ $details['bathrooms'] }}</span> bath - 
                <span>{{ $details['footage'] }}</span> sq ft.
            </div>
        </div>
        <div class="price_check price_block">
            <div>
                <div>
                    <span>{{ $details['cleaning_frequency'] }} </span><span>Cleaning</span>
                </div>
                <div>
                    <span>$</span><span class="price_num_percleaning">{{ $price['per_cleaning'] }}</span>
                </div>
            </div>

            @foreach ($price['extras'] as $item)
            <div>
                <div>
                    <span>{{ $item['name'] }} </span><span>extra</span>
                </div>/
                <div>
                    <span>$</span><span class="price_num_percleaning">{{ $item['cost'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="price_total price_block">
            <div>
                <span>Total</span>
            </div>
            <div class="price_cost">
                <span class="price_dollar">$</span><span class="price_num_total">{{ $price['total_price'] }}</span>
            </div>
        </div>
</div>

<div id="checkout_modal" class="checkout_modal">
    <div class="checkout_modal_header">
        <div class="header_logo">
            <span class="header_pure">pure </span>
            <span class="header_house">housecleaning</span>
        </div>
    </div>
    <div class="checkout_modal_form">
        <form method="POST" action="{{ route('checkout') }}" class="card-form">
            @csrf
            <input type="hidden" name="payment_method" class="payment-method">
            <input class="StripeElement " name="card_holder_name" placeholder="Card holder name" required>
            <div>
                <div id="card-element"></div>
            </div>
            <div id="card-errors" role="alert"></div>
            <div class="form-group checkout_modal_btn">
                <button type="submit">
                    Purchase
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    let stripe = Stripe("{{ env('STRIPE_KEY') }}")
    let elements = stripe.elements()
    let style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    }
    let card = elements.create('card', {style: style})
    card.mount('#card-element')
    let paymentMethod = null
    $('.card-form').on('submit', function (e) {
        $('button.pay').attr('disabled', true)
        if (paymentMethod) {
            return true
        }
        stripe.confirmCardSetup(
            "{{ $intent->client_secret }}",
            {
                payment_method: {
                    card: card,
                    billing_details: {name: $('.card_holder_name').val()}
                }
            }
        ).then(function (result) {
            if (result.error) {
                $('#card-errors').text(result.error.message)
                $('button.pay').removeAttr('disabled')
            } else {
                paymentMethod = result.setupIntent.payment_method
                $('.payment-method').val(paymentMethod)
                $('.card-form').submit()
            }
        })
        return false
    })
</script>
@endsection
