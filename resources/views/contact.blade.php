@extends('welcome')
@section('contact')
  <style>
        form{
            width: 1000px;
            margin: 50px;
            padding: 50px;
            background-color: #ffffff;
            margin-top: 100px;
        }
        #heading{
            margin-bottom: 30px;
        }
        ::-webkit-input-placeholder {
            font-size: 25px;
        }

        :-moz-placeholder { /* Firefox 18- */
            font-size: 25px;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            font-size: 25px;
        }

        /* Overriding styles */

        ::-webkit-input-placeholder {
            font-size: 13px!important;
        }

        :-moz-placeholder { /* Firefox 18- */
            font-size: 13px!important;
        }
        ::-moz-placeholder {  /* Firefox 19+ */
            font-size: 13px!important;
        }
    </style>


<form class="form-horizontal">


    <h1 id="heading">Contact Us</h1>
    <div clas="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputName" class="col-md-2 control-label">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control input-lg" id="inputName" placeholder="Your Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputContact" class="col-md-2 control-label">Contact Number</label>
                <div class="col-md-10">
                    <input type="number" class="form-control input-lg" id="inputContact" placeholder="Your Contact Number">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control input-lg" id="inputEmail" placeholder="Your Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputMessage" class="col-md-2 control-label">Message</label>
                <div class="col-md-10">
                    <textarea type="text" rows="6" class="form-control " id="inputMessage" placeholder="Your Message">
                    </textarea>
                </div>
            </div>
        </div>


    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</form>

@endsection
