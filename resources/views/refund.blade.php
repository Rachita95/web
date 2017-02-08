@extends('welcome')
@section('content-header')
    <h2 style="margin-top: 80px; margin-left:30px; margin-bottom: 30px; color: #2a88bd;">Cancellation and Refund Policy</h2>
@stop
@section('content')
    <p>For smooth functioning of the website all the users will be provided with a unique Ticket No. at the time of placing a request for consultation. All the Users must remember their unique Ticket No. all the time. This number would be required to address any problems, if any.</p>
    <h3><b>Cancellation By User:</b></h3>
    <br>
    <p>In the event of cancellation of any paid consultation for which User had made the payment successfully and a Ticket No. has been generated, but the consultation has not been concluded due to any avoidable / unavoidable reason(s) we must be notified of the same in writing by an email at hello@expertily.com. In such a scenario 10% cancellation charges will be applicable on the refund amount in lieu of administrative fees and online payment processing, and it will be effective from the date we receive your email for cancellation of consultation.

    </p>
    <p>Cancellation can be requested no later than 24 hours before fixed Consultation/Appointment time. Once the fixed consultation is cancelled you will be left with two options, either book a NEW CONSULTATION OR ASK FOR REFUND. If you wish to book a new consultation with the same or a different Professional you can very well do that and if you want your money to be refunded then we will return your money directly in your bank account with 15 business days from the date on which the request for cancellation was received.10% cancellation charges will be applicable on the refund amount in lieu of administrative fees and online payment processing.
    </p>
    <br>
    <h3><b>Cancellation By Professional:</b></h3>
    <br>
    <p>In the event your request for consultation is accepted but post-payment due to unexpected and unavoidable circumstances, your request for consultation is rejected or cancelled by the Professional, our Customer Support Team will contact you immediately and update you on the same through phone call as well as through email. In this scenario as well you will be left with two options, either book a NEW CONSULTATION OR GET REFUND. We would advise you to book a new consultation with the same or a different Professionalor if you wish your money to be refunded then we will return your money directly in your bank account with 15 business days from the date on which the request was cancelled from professional’s end. 10% cancellation charges will be applicable on the refund amount in lieu of administrative feesand online payment processing.</p>
    <br>
    <hr>
    <br>
    <div class="row" style="text-align: center">
        <ol>
            <li class="col-md-3 item">Cancellation by User</li>
            <li class="col-md-3 item">Cancellation by User</li>
            <li class="col-md-3 item">Cancellation by User</li>
            <li class="col-md-3 item">Cancellation by User</li>
        </ol>
    </div>

    <style>
    body {
    counter-reset: item;
    }
    ol {
    list-style: none;
    }
    .item {
    counter-increment: item;
    margin-bottom: 5px;
    }
    .item:before {
    margin-right: 10px;
    content: counter(item);
    background: lightblue;
    border-radius: 100%;
    color: white;
    width: 1.2em;
    text-align: center;
    display: inline-block;
    }
    </style>
@stop

