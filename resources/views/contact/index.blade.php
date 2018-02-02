@extends('layouts.index')

@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <h3>Address</h3>
            <p>
                Av. Greenville 987,<br>
                New York,<br>
                90873<br>
                United States
            </p>
        </div>

        <div class="col-lg-7">
            <h3>Drop Us A Line</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">Your Name</label>
                    <input name="Name" class="form-control" id="name1" placeholder="Your Name" type="name">
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    <input name="Mail" class="form-control" id="email1" placeholder="Enter email" type="email">
                </div>
                <div class="form-group">
                    <label>Your Text</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection