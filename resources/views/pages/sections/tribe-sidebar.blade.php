{{-- tribe setting sidebar nav --}}
<style type="text/css">
	.mini-submenu{
	  display:none;  
	  background-color: rgba(0, 0, 0, 0);  
	  border: 1px solid rgba(0, 0, 0, 0.9);
	  border-radius: 4px;
	  padding: 9px;  
	  /*position: relative;*/
	  width: 42px;

	}

	.mini-submenu:hover{
	  cursor: pointer;
	}

	.mini-submenu .icon-bar {
	  border-radius: 1px;
	  display: block;
	  height: 2px;
	  width: 22px;
	  margin-top: 3px;
	}

	.mini-submenu .icon-bar {
	  background-color: #000;
	}

	#slide-submenu{
	  background: rgba(0, 0, 0, 0.45);
	  display: inline-block;
	  padding: 0 8px;
	  border-radius: 4px;
	  cursor: pointer;
	}
</style>
<div class="col-md-3" style="height: 100vh;">
	<div class="col-md-12" style="padding-left: 0px; height: 100%;">
		<div class="col-sm-12 col-md-12 sidebar" style="border-right: solid; height: 100%; padding-left: 0px;">
		    <div class="mini-submenu">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </div>
		    <div class="list-group" style="height: 100%;">
		{{--         <span href="#" class="list-group-item active">
		            Submenu
		            <span class="pull-right" id="slide-submenu">
		                <i class="fa fa-times"></i>
		            </span>
		        </span> --}}
		        {{-- <a href="{{route('tribe.setting.main', ["tribe_id" => $tribe['tribe']->id])}}" class="list-group-item active" id="menu-main">
		            <i class="fa fa-home"></i> Main
		        </a> --}}
		        <a href="{{route('tribe.setting.join-request', ["tribe_id" => $tribe['tribe']->id])}}" class="list-group-item" id="menu-join-request">
		            <i class="fa fa-comment-o"></i> Join Request <span class="badge"></span>
		        </a>
		        <a href="{{route('tribe.setting.profile-edit', ["tribe_id" => $tribe['tribe']->id])}}" class="list-group-item" id="menu-profile-edit">
		            <i class="fa fa-edit"></i> Tribe Profile
		        </a>
		        <a href="#" class="list-group-item" id="menu-member">
		            <i class="fa fa-user"></i> Tribe Member
		        </a>
		        <a href="{{route('tribe.setting.project-list', ["tribe_id" => $tribe['tribe']->id])}}" class="list-group-item" id="menu-project-list">
		            <i class="fa fa-folder-o"></i> Project <span class="badge"></span>
		        </a>
		    </div>        
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){

	$('#slide-submenu').on('click',function() {			        
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.mini-submenu').fadeIn();	
        });
        
      });

	$('.mini-submenu').on('click',function(){		
        $(this).next('.list-group').toggle('slide');
        $('.mini-submenu').hide();
	});


	$(".list-group-item").each(function(){
		$(this).attr("class", "list-group-item");
	});

	var selected = '{{$tribe['selected']}}';
	$("#menu-"+selected).attr("class", "list-group-item active");
})


</script>
