    $('.owl-carousel').owlCarousel({
    loop:true,    
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

  $('.owl-carousel-2').owlCarousel({
    loop : true,
    margin : 10,
    autoplay : true,
    autoplayTimeout : 6000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items: 1
      },
      1000:{
        items:5
      }
    }
  });
  $('.usercard-image').click(function(){
      $('#modal').modal('show');
      var foto = $(this).data('foto');
      var job = $(this).data('job');
      var name = $(this).data('name');
      var description = $(this).data('description');
      var phone = $(this).data('phone');
      var email = $(this).data('email');
      var twitter = $(this).data('twitter');
      var instagram = $(this).data('instagram');
      var linkedin = $(this).data('linkedin');

      var imageUrl = 'public/upload/images/team/'+foto;      

      $('#foto').css("background-image","url('"+imageUrl+"')");
      $('#name').text(name);
      $('#job').text(job);
      $('#description').html(description);
      $('#phone').text(phone);
      $('#email').text(email);
      $('#twitter').attr('href',twitter);
      $('#instagram').attr('href',instagram);
      $('#linkedin').attr('href',linkedin);
      if(twitter == ''){
        $('#twitter').addClass('d-none');
      }else{
        $('#twitter').removeClass('d-none');
      }
      if(instagram == ''){
        $('#instagram').addClass('d-none');
      }else{
        $('#instagram').removeClass('d-none');
      }
      if(linkedin == ''){
        $('#linkedin').addClass('d-none');
      }else{
        $('#linkedin').removeClass('d-none');
      }      
    }); 