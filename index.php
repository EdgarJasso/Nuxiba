<!doctype html>
<html lang="en">
  <head>
    <title>Nuxiba</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
          <div class="row mt-3">
              <div class="col-md-12">
                  <div class="jumbotron">
                      <h1 class="display-4">Prueba tecnica nuxiba</h1>
                      <p class="lead">Edgar jasso / <span>31-05-2022</span></p>
                      <hr class="my-4">
                      
                  </div>
              </div>
          </div>
          <div class="row">
             <p class="lead">Usuarios</p>
             <div id="out_1" class="row">
             </div>
          </div>
      </div>

      <!-- Modal Mas info -->
        <div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="moreInfoTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLongTitle">Detalles usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Datos personales:</h4>
                        <h6 class="card-subtitle mb-2 text-muted">UserId:<span id="mi_id"></span></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><span id="mi_names"></span></h6>
                        <p class="card-text"><span id="mi_phone"></span></p>
                        <p class="card-text"><span id="mi_website"></span></p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h4 class="card-title">Compañia:</h4>
                        <h6 class="card-subtitle mb-2 text-muted"><span id="mi_company_name"></span></h6>
                        <p class="card-text"><span id="mi_company_catch"></span></p>
                        <p class="card-text"><span id="mi_company_bs"></span></p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h4 class="card-title">Direccion: </h4>
                        <h6 class="card-subtitle mb-2 text-muted"><span id="mi_city"></span> /<span id="mi_street"></span> / <span id="mi_suite"></span></h6>
                        <p class="card-text"><span id="mi_zip"></span></p>
                        <div id="enlace_dir"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Mas info -->
        <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLongTitle">Publicaciones del usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="body_post">
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
        </div>

        <!-- Modal Todos -->
        <div class="modal fade" id="todosModal" tabindex="-1" role="dialog" aria-labelledby="todosModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLongTitle">Todos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h4 class="card-title">Ingreso informacion</h4>
                                <form name="frmAll" id="frmAll" class="form_validation">
                                    <div class="form-group">
                                        <label for="All_IdUser">IdUser</label>
                                        <input id="All_IdUser" class="form-control" type="text" name="All_IdUser" readonly value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="All_Title">Title</label>
                                        <input id="All_Title" class="form-control" type="text" name="All_Title" placeholder="Ingresa titulo" required>
                                        <div class="invalid-feedback">
                                            Debe especificar un titulo
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="All_Title">Completado</label>
                                        <div class="form-check">
                                        <input id="All_complet" class="form-check-input" type="checkbox" name="All_complet" value="false">
                                    </div>
                                    </div>
                                    <div class="card-body text-center"> 
                                        <div class="btn-group" role="group" aria-label="">   
                                            <button type="submit" class="btn btn-light" id="All_btn">Enviar</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="body_todos"></div>
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        $(function () {
                fetch('https://jsonplaceholder.typicode.com/users')
                .then((response) => response.json())
                    .then((json) => getUsers(json));

            $('#frmAll').submit(function() {
                var forms = document.querySelectorAll('#frmAll');
                Array.prototype.slice.call(forms)
                .forEach(function (form) {		  
                    if (!form.checkValidity()) {				
                        event.preventDefault();
                        event.stopPropagation();					
                        formValidated=false;
                        //console.log("datos bad");
                    }			
                    else{				
                        event.preventDefault();
                        event.stopPropagation();
                        formValidated=true;
                        //console.log("datos ok");
                        sendApi();
                    }
                    form.classList.add('was-validated')		  
                });			
                return false;
            });
        });

        function getUsers(json){
            //console.log(json);
            for(var k in json) {
                var datos = json[k];
                //console.log(datos);
                var txt = '<div class="col-md-4"><div class="card text-white bg-secondary mb-3" style="max-width: 20rem;"><div class="card-header">ID USER: '+datos.id+'</div><div class="card-body text-center"><h5 class="card-title">'+datos.name+'</h5><h6 class="card-subtitle text-muted">'+datos.website+'</h6><h6 class="card-subtitle text-muted">'+datos.phone+'</h6></div><div class="card-body text-center"><p class="card-text">'+datos.email+' / '+datos.username+'</p></div><div class="card-body text-center"> <div class="btn-group" role="group" aria-label="">   <button type="button" class="btn btn-warning info_"  data-id="'+datos.id+'">Mas</button> <button type="button" class="btn btn-info post_"  data-id="'+datos.id+'">Post</button>  <button type="button" class="btn btn-success todos_" data-id="'+datos.id+'">Todos</button></div></div> </div> </div>';
                $("#out_1").append(txt);
            }   
            $(".info_").click(function(){
                var id_user =  $(this).data("id");
                 //console.log("click info "+id_user);
                 fetch('https://jsonplaceholder.typicode.com/users/'+id_user)
                .then((response) => response.json())
                    .then((json) => moreInfo(json));
            });
            
            function moreInfo(json){
                //console.log(json);
                $("#mi_id").html(json.id);
                $("#mi_names").html(json.name+" / "+json.username);
                $("#mi_website").html(json.website);
                $("#mi_phone").html(json.phone);

                $("#mi_company_name").html(json.company.name);
                $("#mi_company_catch").html(json.company.catchPhrase);
                $("#mi_company_bs").html(json.company.bs);

                $("#mi_city").html(json.address.city);
                $("#mi_street").html(json.address.street);
                $("#mi_suite").html(json.address.suite);
                $("#mi_zip").html(json.address.zipcode);
                $("#enlace_dir").empty();
                var enlace = '<a target="_blank"href="https://maps.google.com/?q='+json.address.geo.lng+','+json.address.geo.lat+'" class="card-link">Revisar</a>';
                $("#enlace_dir").append(enlace);
                
                $('#moreInfo').modal('show');
            }

            $(".post_").click(function(){
                var id_user =  $(this).data("id");
                 //console.log("click post "+id_user);
                 fetch('https://jsonplaceholder.typicode.com/users/'+id_user+'/posts')
                .then((response) => response.json())
                    .then((json) => postUser(json));
            });

            function postUser(json){
                //console.log(json);
                $("#body_post").empty();
                for(var d in json) {
                    var datos = json[d]; 
                    //console.log("post id:"+datos.id);
                    //console.log(datos);
                    var post = '<br><div class="card"> <div class="card-body"> <h4 class="card-title">'+datos.title+' </h4>  <h6 class="card-subtitle mb-2 text-muted">'+datos.body+'</h6> </div> <hr><div id="body_coments_'+datos.id+'"></div>';
                    $("#body_post").append(post);
                    commentPost(datos.id);
                }
                $('#postModal').modal('show');
            }

            async function commentPost(id){
                //console.log("coments of:"+id);
                const response = await fetch('https://jsonplaceholder.typicode.com/post/'+id+'/comments');
                const coments = await response.json();
                //console.log(coments);
                for(var c in coments) {
                    var datos = coments[c];
                    //console.log(datos);
                    var figure = '<div class="mx-2"><figure class="text-end"><blockquote class="blockquote">   <h3>'+datos.name+'</h3><p class="mb-0">'+datos.body+'</p> </blockquote>  <figcaption class="blockquote-footer">'+datos.email+'</figcaption></figure></div>';
                    $("#body_coments_"+id).append(figure);
                }
            }


            $(".todos_").click(function(){
                 var id_user =  $(this).data("id");
                 $('#All_IdUser').val(id_user);
                 //console.log("click todos "+id_user);
                 fetch('https://jsonplaceholder.typicode.com/users/'+id_user+'/todos')
                .then((response) => response.json())
                    .then((json) => todosUser(json));
                $('#todosModal').modal('show');
            });

            async function todosUser(json){
                $("#body_todos").empty();
                //console.log(json);
                json.reverse();
                for(var t in json) {
                    var datos = json[t];
                    //console.log(datos);
                    var completed = "danger";
                    if (datos.completed) {
                        completed = "success";
                    }
                    var txt = '<div class="col-md-4"><div class="card text-white bg-'+completed+' mb-3" style="max-width: 20rem;"><div class="card-header">ID All: '+datos.id+'</div><div class="card-body text-center"><h5 class="card-title">'+datos.title+'</h5></div></div> </div>';
                    $("#body_todos").append(txt);
                }
            }
        }

        function sendApi(){
                var datos = {};
                datos.userId = parseInt($('#All_IdUser').val());
                datos.title = $('#All_Title').val();
                datos.completed = $('#All_complet').val();
                $.ajax({
					data: JSON.stringify(datos),
					type: "POST",
					dataType: "json",
					contentType: 'application/json',
					headers: {
						'Accept': '*/*',
						'X-Requested-With': 'XMLHttpRequest',
						'Cache-Control': 'no-cache'
					},
					url: "https://jsonplaceholder.typicode.com/users/"+datos.userId+"/todos",
				})
				.done(function(data, textStatus, jqXHR) {
				    //console.log(data);
                    $("#frmAll").trigger("reset");	
                    alert("registro realizado, Id:"+data.id);			
				})
				.always(function() {
					console.log("finalizo sendApi");					
				})
				.fail(function(jqXHR, textStatus, errorThrown) {					
					console.log("sendApi ERROR: " + textStatus+'-'+errorThrown + ' - ' + jqXHR.responseText);
				});
                
            }
    </script>
</body>
</html>
