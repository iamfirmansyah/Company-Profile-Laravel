    var owl = $('.owl-about');
    owl.owlCarousel({
        loop:true,
        slideTransition:'linear',
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed:5000,
        autoplayHoverPause:false,
        responsive :{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }


    });
    $('.user4').click(function(){
      $('#modal').modal('show');
      
      var foto4 = $(this).data('foto4');
      var job4 = $(this).data('job4');
      var name4 = $(this).data('name4');
      var description4 = $(this).data('description4');
      var phone4 = $(this).data('phone4');
      var email4 = $(this).data('email4');
      var twitter4 = $(this).data('twitter4');
      var instagram4 = $(this).data('instagram4');
      var linkedin4 = $(this).data('linkedin4');

      var imageUrl4 = 'public/upload/images/team/'+foto4;      

      $('#foto').css("background-image","url('"+imageUrl4+"')");
      $('#name').text(name4);
      $('#job').text(job4);
      $('#description').html(description4);
      $('#phone').text(phone4);
      $('#email').text(email4);
      $('#twitter').attr('href',twitter4);
      $('#instagram').attr('href',instagram4);
      $('#linkedin').attr('href',linkedin4);
    });
    
    $('#user1').click(function(){
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
    });  

    $('#user2').click(function(){      
      $('#modal').modal('show');
      var foto2 = $(this).data('foto2');
      var job2 = $(this).data('job2');
      var name2 = $(this).data('name2');
      var description2 = $(this).data('description2');
      var phone2 = $(this).data('phone2');
      var email2 = $(this).data('email2');
      var twitter2 = $(this).data('twitter2');
      var instagram2 = $(this).data('instagram2');
      var linkedin2 = $(this).data('linkedin2');
      var imageUrl2 = 'public/upload/images/team/'+foto2;      

      $('#foto').css("background-image","url('"+imageUrl2+"')");
      $('#name').text(name2);
      $('#job').text(job2);
      $('#description').html(description2);
      $('#phone').text(phone2);
      $('#email').text(email2);
      $('#twitter').attr('href',twitter2);
      $('#instagram').attr('href',instagram2);
      $('#linkedin').attr('href',linkedin2);  
    });

    $('#user3').click(function(){      
      $('#modal').modal('show');
      
      var foto3 = $(this).data('foto3');
      var job3 = $(this).data('job3');
      var name3 = $(this).data('name3');
      var description3 = $(this).data('description3');
      var phone3 = $(this).data('phone3');
      var email3 = $(this).data('email3');
      var twitter3 = $(this).data('twitter3');
      var instagram3 = $(this).data('instagram3');
      var linkedin3 = $(this).data('linkedin3');

      var imageUrl3 = 'public/upload/images/team/'+foto3;      

      $('#foto').css("background-image","url('"+imageUrl3+"')");
      $('#name').text(name3);
      $('#job').text(job3);
      $('#description').html(description3);
      $('#phone').text(phone3);
      $('#email').text(email3);
      $('#twitter').attr('href',twitter3);
      $('#instagram').attr('href',instagram3);
      $('#linkedin').attr('href',linkedin3);
    });      

          
