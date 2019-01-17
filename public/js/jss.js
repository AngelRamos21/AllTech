$(document).ready(function() {

         listar();
        $('#formularioPost').submit(function(e){
          e.preventDefault();

            const datos ={ _token: $('#signup-token').val(), text:$('#post').val() }
            $.post('/post',datos,function (response) {
             $('#formularioPost').trigger('reset');
             listar();
            })



        });


        function listar() {
          $.ajax({
           url:'listarPost',
           type:'GET',
           success: function (data) {
             let template='';
             data[0].forEach(function(post) {
               template+=`
               <li>
                        <div class="row mt-3">
                          <div class="postImg col-2">
                              <img src=/storage/users/${data[1].image} alt="">
                              <span class="nameUsuarioPost">${data[1].userName}</span>
                          </div>
                          <div class=" post col-10" >
                               <p>${post.text}</p>
                               <hr>
                               <small>Publicado: (${post.created_at})</small>
                               <small>${(post.updated_at>post.created_at)?'Editado':''}</small>

                               <button type="button" class="btn btn-sm btn-primary pull-right mt-2 ml-1 mb-2" ng-click="edit(row);" data-toggle="modal" data-target="#editComment${post.id}">
                                  <i class="fa fa-fw fa-pencil" ></i>
                               </button>

                               <button type="submit" value=${post.id}  id=${post.id} class="eliminarPosteo btn btn-sm btn-danger pull-right mt-2  mb-2 " ng-click="remove(row);">
                                   <i class="fa fa-fw fa-trash-o" ></i>
                              </button>

                          </div>
                       </div>

                       <div class="modal fade" id="editComment${post.id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle">Editar posteo</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</spa02:27 5/1/2019n>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form method="post" action="">
                                 <div class="form-group">
                                 <textarea id="nuevoText" name="post" class="form-control status-box" rows="3">${post.text}</textarea>
                                 </div>

                           </div>
                           <div class="modal-footer">
                               <p class="counter pull-left">140</p>
                              <button id="${post.id}" type="submit" name="button" class="publico btn btn-primary pull-right" >Editar</button>
                             <button id="close" type="button" class="btn btn-secondary pull-right ml-2" data-dismiss="modal">cerrar</button>
                           </div>
                            </form>
                         </div>
                       </div>
                     </div>
                </li>
               `
             })
            document.getElementById('listPost').innerHTML=template;

           }

          })

        }

       $(document).on('click','.eliminarPosteo',function (e) {
         e.preventDefault();
        if(confirm('¿Desea eliminar el post?')){
          const id = this.id;
          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
             url:'/eliminarPost',
             type:'POST',
             data:{id},
             success: function (response) {
               listar();
               $.dialog({
                title: 'Listo!',
                content: 'Su post se elimino correctamente',
              });
               console.log(response);
             }


          })

        }


      });


       $(document).on('click','.publico',function (e) {
         e.preventDefault();

         $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
            url:'/editarPost',
            type:'POST',
            data:{texto:$('#nuevoText').val(),ide:this.id},
            success: function (response) {
              listar();
              $("#close").click()
              console.log(response);
            }


         })

       });


        $('.status-box').keyup(function() {
            var postLength = $(this).val().length;
            var charactersLeft = 140 - postLength;
            $('.counter').text(charactersLeft);

            if (charactersLeft < 0) {
               $('.public').addClass('disabled');
                 $('.public').attr("disabled", true);
            }

            else if (charactersLeft == 140) {
           $('.public').addClass('disabled');
            }

            else {
              $('.public').removeClass('disabled');
              $('.public').attr("disabled", false);

            }
       });

       $('.public').addClass('disabled');





});
