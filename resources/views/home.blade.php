@extends('master')
	@section('home')

	<title>VICE CITY PERFIL</title>

	<div class="contentAll">
				<h2 class="titlePerfil" id="h2Perfil">PERFIL</h2>

				<div class="containerForm">
					<div class="detailsPerfil">

						<div class="image">
							<ul>
								<li>
								<a href="/perfil/{{Auth::user()->id}}"><img src="/storage/users/{{Auth::user()->image}}"></a>
								</li>
							</ul>
						</div>

						<div class="textPerfil">
							<p>{{Auth::user()->name}}</p>
	            <p>{{Auth::user()->surname}}</p>
						</div>
					</div>

					<form method="post" class="perfilForm" enctype="multipart/form-data">
	          @csrf
					<div>
						<p class="form_perfil">Email</p>
		                <input class="input" type="email" name="email" value="{{old("email")}}" placeholder="{{Auth::user()->email}}">
		                <div class="error">
	               			 {{$errors->first('email')}}
	            		 </div>
		        	</div>

					<div>
						<p class="form_perfil">Teléfono</p>
		                <input class="input" type="Telefono" name="telefono" value="{{old("telefono")}}" placeholder="{{Auth::user()->telefono}}">
		                <div class="error">
	                		{{$errors->first('telefono')}}
	            		</div>
		       		</div>

		        	<div>
		           		<p class="form_perfil">DNI</p>
		            	<input class="input" type="text" name="dni" value="{{old("dni")}}" placeholder="{{Auth::user()->dni}}">
		            	<div class="error">
	                		{{$errors->first('dni')}}
	            		</div>
	         		 </div>

		         	<div>
		           		<p class="form_perfil">Dirección</p>
		            	<input class="input" type="text" name="direccion" value="{{old("direccion")}}" placeholder="{{Auth::user()->direccion}}">
		            	<div class="error">
	                		{{$errors->first('direccion')}}
	             		</div>
		         	</div>

	          		<div>
		         	 	<p class="form_perfil">Código Postal</p>
		          	  <input class="input" type="text" name="codigo_postal" value="{{old("codigo_postal")}}" placeholder="{{Auth::user()->codigo_postal}}">
		          	  	<div class="error">
	               			{{$errors->first('codigo_postal')}}
	             		</div>
		        	</div>
					  <div>
	        			<p class="form_perfil">Provincia</p>
         				<select id = 'provincia' type="text" name="provincia" class="input"  value="{{Auth::user()->provincia}}">
         					<option disabled selected>Seleccionar</option>
          			</select>
        		</div>

		        	<div>
		           		<p class="form_perfil">Ciudad</p>
		            	<input class="input" type="text" name="ciudad" value="{{old("ciudad")}}" placeholder="{{Auth::user()->ciudad}}">
		            	<div class="error">
	                		{{$errors->first('ciudad')}}
	            		</div>
		        	</div>

							<div>
					    	<p class="form_perfil">Fecha de Nacimiento</p>
					    	<input class="input" type="date" name="fecha_de_nacimiento"  value="{{Auth::user()->fecha_de_nacimiento}}" placeholder="{{Auth::user()->fecha_de_nacimiento}}">
					    	<div class="error">
						      		{{$errors->first('fecha_de_nacimiento')}}
						   		</div>
					    </div>

		            <div class="input">
	         			<input class="input" type="file" name="image" value="" placeholder="image">
	       			 </div>

	        			<div class="error">
	         		 		{{$errors->first('image')}}
	       			 	</div>


		        		<input class="button_pg_edit" type="submit" value="Actualizar">
					</form>

				</div>
			</div>

	@endsection
