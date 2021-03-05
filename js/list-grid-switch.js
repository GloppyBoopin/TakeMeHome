$(document).ready(function() {
  $('#list').click(function(event) {
    event.preventDefault();
    $('.addesk-items').addClass('list');
    $('.shop-items-container').addClass('list'); 
    $('#list').addClass('active');
    $('#grid').removeClass('active');
    localStorage.setItem('.items', 'list');
  });
  $('#grid').click(function(event){
    event.preventDefault();
    $('.addesk-items').removeClass('list');
    $('.shop-items-container').removeClass('list'); 
    $('#grid').addClass('active');
    $('#list').removeClass('active');
    localStorage.setItem('.items', 'grid');
  });

  let itemClass = localStorage.getItem('.items');
  if (itemClass){
    if (itemClass === 'grid'){
      $('.addesk-items').removeClass('list');
      $('.shop-items-container').removeClass('list');
      $('#list').removeClass('active');
      $('#grid').addClass('active');
    }
    else if (itemClass === 'list') {
      $('.addesk-items').addClass(itemClass);
      $('.shop-items-container').addClass(itemClass);
      $('#list').addClass('active');
      $('#grid').removeClass('active');
    }
  }
  else {
    localStorage.setItem('.items', 'grid');
  }
});