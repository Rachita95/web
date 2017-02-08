@extends('welcome')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@stop

@section('content-header')
    <h2 style="margin-top: 80px; margin-left:30px; margin-bottom: 30px; color: #2a88bd;">Frequently Asked Questions</h2>
@stop

@section('content')
    <style>
        .question{
            background-color: #E6E6FA;
            padding: 10px;
            margin: 10px 20px 0px 20px;
        }
        .answer{
            background-color: #FFF0F5;
            padding: 10px;
            margin: 0px 20px 10px 20px;
            display: none;
        }
    </style>
    <div class="question">
        <div class="row">
            <div class="col-md-10">
                <h4>How Does Expertily Works ? </h4>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-default" aria-label="Left Align" onclick="toggle('ans1')">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="ans1" class="answer">
                <h5>Answer To This Question. </h5>
    </div>


            <div class="question">
        <div class="row">
            <div class="col-md-10">
                <h4>How To Fix Appointment With A Lawyer ? </h4>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-default" aria-label="Left Align" onclick="toggle('ans2')">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="ans2" class="answer">
        <h5>Answer To This Question. </h5>
    </div>

    <div class="question">
        <div class="row">
            <div class="col-md-10">
                <h4>How To Find Lawyer Near My Place ? </h4>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-default" aria-label="Left Align" onclick="toggle('ans3')">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="ans3" class="answer">
        <h5>Answer To This Question. </h5>
    </div>


    <div class="question">
        <div class="row">
            <div class="col-md-10">
                <h4>Any Other Question ? </h4>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-default" aria-label="Left Align" onclick="toggle('ans4')">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="ans4" class="answer">
        <h5>Answer To This Question. </h5>
    </div>

    <script type="text/javascript">

        function toggle(id) {
            var elements = document.getElementsByClassName('answer');
            for(var i = 0, length = elements.length; i < length; i++) {
                elements[i].style.display = 'none';
            }
            document.getElementById(id).style.display = 'block';
        }
    </script>
@stop