$(function () {
  $('.sent_message').click(function () {
    var data = $(this).data();

    $("#date").text(data['date']);
    $("#email").text(data['email']);
    $("#title").text(data['title']);
    $("#messages").text(data['messages']);
  })
});

$(function () {
  $('.task').click(function () {
    $(this).toggleClass('open');

    if ($(this).hasClass('open')) {
      $('.tasklist').slideDown();
    } else {
      $('.tasklist').slideUp();
    }
  });
});

$(function () {
  $('.top-task').click(function () {
    $('.cover').fadeIn();
  });
  $('.cover').on('click', function () {
    $('.cover').fadeOut();
  });
  $('.tasklist').click(function (event) {
    event.stopPropagation();
  });
});

$(function () {
  $(".btn").on("click", function () {
    const selected = $("select[name=shop_id]");
    window.location.href = selected.val();
  });
});

$(function () {
  $('.triple-bar').on('click', function () {
    $('.menu').toggleClass('active');
  });
  if ($(this).hasClass('active')) {
    $('.menu-item').addClass('active');
  } else {
    $('.menu-item').removeClass('active');
  }
  $('.nav-menu ul li a').click(function () {
    $('.menu-item').removeClass('active');
  });
});
