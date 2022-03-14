@extends('layouts.app')

@section('content')
@section('title', 'Contact Us')

<div class="login-overlay">
    
    <div class="container mb-6 register-container">
        <h1 class="text-center mt-3 mb-2 buttonstyle">Contact Us</h1>
    
        <form method="POST" name="frmContact" class="register-form" onsubmit="return false;">
            <div class="form-group">
                <label for="first_name" class="form-label register-form text-style">First Name </label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required />
            </div>
    
            <div class="form-group">
                <label for="last_name" class="form-label register-form text-style">Last Name </label>
                <input type="test" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required />
            </div>
    
            <div class="form-group">
                <label for="email" class="form-label register-form text-style">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
            </div>
    
            <div class="form-group">
                <label for="subject" class="form-label register-form text-style">
                <select class="form-select" name="subject" id="subject" placeholder="Subject" aria-label="Default select example">
                    <option selected>Choose a subject</option>
                    <option value="1">Order</option>
                    <option value="2">Delivery and Returns</option>
                    <option value="3">Product information</option>
                    <option value="4">Sustainability</option>
                    <option value="5">Warranty</option>
                </select>
                </label>
            </div>
                 
            <div class="form-group">
                <label for="content" class="form-label register-form text-style">Message</label> 
                    <span id="userMessage-info" class="info"></span><br/>
                <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
            </div>
    
            <input class="btn text-style submit-button" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
    
@endsection
