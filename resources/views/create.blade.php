<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>

	<style type="text/css">
		#mydiv{
			margin-left:100px;
	
		}
		.input{
			padding:10px;
margin-top: 10px;
width: 300px;
		}
		.m-t-10{margin: 10px;}
		.error {
			color: red;
		}

	</style>
</head>
<body>
<div id="mydiv">
	 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

   


       <!-- <form method="post" action="{{ URL::to('store') }}" >  -->  
	<form method="post" action="{{ route('mystore') }}" > 
	{{csrf_field()}}

	<!-- <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>-->
	<div>
		<input type="text"  value="{{old('name')}}" placeholder="Name" class="input" name="name">
         <span class="error">
         	{{ $errors->first('name')}}</span>
	</div>
		
		<div>
			<input type="email" value="{{old('email')}}"  placeholder="Email" class="input" name="email">

 <span class="error">
 	{{$errors->first('email')}}</span>
		</div>
			
			<div>
				<input type="date"  class="input" name="dateofbirth">
				 <span class="error">
         	{{ $errors->first('dateofbirth')}}</span>

			</div>
			
			<div>
				<input type="number" value="{{old('salary')}}"  class="input" name="salary">
				 <span class="error">
         	{{ $errors->first('salary')}}</span>

			</div>
			
			<div>
				<input type="text" class="input" name="address">
				 
			</div>
		
	
	<div>
		<input type="submit" class="m-t-10" name="submit">
	</div>
</div>
		
	
	</div>
</form>

<!--script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });!-->
</body>
</html>