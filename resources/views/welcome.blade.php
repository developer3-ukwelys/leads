@extends('layouts.app')

@section('content')
<div class="container">
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#display_table">
  View Submission
</button>
    <div class="row">
        <div class="col-6 mx-auto">
            <form id="leads_form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Submission Model -->
<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackLabel">Feedback</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Your Email has been submitted successfully. We will reach out to you soon. You can close this and view our other products</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <form id="form1">
        <div class="mb-3">
            <label for="messageName" class="form-label">Name</label>
            <input type="text" class="form-control" id="messageName" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="messageEmail" class="form-control" id="messageEmail" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="messageText" class="form-label">Message</label>
            <textarea id="messageText" class="form-control" id="messageText" aria-describedby="emailHelp" style="height:170px" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
</div>

<div class="modal fade" id="response" tabindex="-1" aria-labelledby="response" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="response">response</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Your Email has been submitted successfully. We will reach out to you soon. You can close this and view our other products</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @include('_modal')
@endsection