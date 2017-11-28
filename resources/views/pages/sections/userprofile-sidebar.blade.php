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
<div class="col-md-3" style="height: 100vh; margin-top: 7%;">
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
		        <a href="{{route('user.profile-page') }}" class="list-group-item" id="menu-profile-edit">
		            <i class="fa fa-user"></i> Profile
		        </a>
		        <a href="{{route('user.project-list-page') }}" class="list-group-item" id="menu-project-list">
		            <i class="fa fa-tasks"></i> Project
		        </a>
		        <a href="" class="list-group-item" id="menu-message-list">
		            <i class="fa fa-envelope"></i> Message <span class="badge">0</span>
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

	var selected = '{{ $menu }}';
	$("#menu-"+selected).attr("class", "list-group-item active");
})


</script>
