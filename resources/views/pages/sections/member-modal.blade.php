<script type="text/javascript">
  
  function onMemberClick(userId){
    
    $("#message-text").val("");

    var data = {
      "userId" : userId
    };

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method: "GET",
      url: '{{ route('user.user-detail') }}',
      data: data
    }).done(function(result) {
      $("#memberModalLabel").text(result.user.name);
      $("#recipient-id").val(result.user.email);
      fillProfile(result);

    });

    $('#memberModal').modal('show');
  }

  /**
   * Fill profile modal with user detail
   * 
   * @param  {[type]} result [description]
   * @return {[type]}        [description]
   */
  function fillProfile(result){

    var interests = "";
    var length = result.user.interests.length;

    result.user.interests.forEach(function(element, index){
      interests += element.interest

      if(length != index+1){
        interests += ", ";
      } 
    });

    var profile = "";
    profile += "<b>Name:</b> " + result.user.name + "</br>";
    profile += "<b>Summary:</b> " + result.user.description + "</br>";
    profile += "<b>Interest:</b> " + interests + "</br>";
    profile += "<b>Suburb:</b> " + result.user.suburb + "</br>";
    profile += "<b>State:</b> " + result.user.state + "</br>";

    $("#profile-body").html(profile);

  }

</script>
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="memberModalLabel" style="font-size: 20px;">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="accordion" role="tablist">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h3 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                  Profile
                </a>
              </h3>
            </div>
            <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p id="profile-body">
                  Summary: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </br>
                  Name: name </br>
                  Interest: interest1, interest2, interest3 </br>
                  Suburb: suburb </br>
                  State: state </br>
                </p>
              </div>
            </div>
          </div>
          <hr/>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h3 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                  Send Message
                </a>
              </h3>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                {{-- <form method="post" action="{{ route('tribe.setting.profile-update') }}"> --}}
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-id" value="" disabled="true">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                {{-- </form>  --}}
                <button type="button" class="btn btn-primary" id="messageSendBtn" onclick="checkSendMessage();">Send message</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>