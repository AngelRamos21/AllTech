
obtenerPost();

var formPost = document.getElementById('formularioPost');

formPost.addEventListener('submit', function (e) {

  var datos = new FormData(formPost);
  var route= "http://localhost:8000/post";

  fetch(route,{
    method: 'POST',
    body: datos
  })
   .then(function (response) {
     return response.text();
   })
   .then(function (data) {
     obtenerPost();
      formPost.reset();
   })
   e.preventDefault();

})


function obtenerPost() {
  fetch("http://localhost:8000/listarPost")
   .then(function (response) {
     return response.json();
   })
   .then(function (data) {
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
                     <form method="post" action="/editarPost">
                         {{csrf_field()}}
                         <div class="form-group">
                         <textarea name="post" class="form-control status-box" rows="3">${post.text}</textarea>
                         </div>
                         <input type="hidden" name="id_post" value="${post.id}" />
                   </div>
                   <div class="modal-footer">
                       <p class="counter pull-left">140</p>
                      <button type="submit" name="button" class="public btn btn-primary pull-right" >Editar</button>
                     <button type="button" class="btn btn-secondary pull-right ml-2" data-dismiss="modal">cerrar</button>
                   </div>
                    </form>
                 </div>
               </div>
             </div>
        </li>
       `
     })
    document.getElementById('listPost').innerHTML=template;

    var postss= document.querySelectorAll('.eliminarPosteo')
    postss.forEach(function(posts){
      posts.addEventListener('click',function () {
       const id = parseInt(this.getAttribute('id'))

       var datos = new FormData(id);
       var route= "http://localhost:8000/eliminarPost";

       fetch(route,{
         method: 'POST',
         body: datos
       })
        .then(function (response) {
          return response.text();
        })
        .then(function (data) {
          console.log(data);
        })
      })

    })




   })
   .catch(function(error){

    console.log('el error fue: '+error);

   })

}









$(document).ready(function() {


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
