/* Menue Toggler*/


/*  Loader*/

		

  /*Search*/
  $(document).ready(function(){
        
    $('#search_data').autocomplete({
      source: "fetch.php",
      minLength: 1,
      select: function(event, ui)
      {
        $('#search_data').val(ui.item.value);
        $("#userID").val(ui.item.id);
      }
    }).data('ui-autocomplete')._renderItem = function(ul, item){
      return $("<li class='ui-autocomplete-row'></li>")
        .data("item.autocomplete", item)
        .append(item.label)
        .appendTo(ul);
    };

  });

  /*Customer Review*/
  $(document).ready(function(){
    $('#testimonial-slider').owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
    /* Back to top*/
     window.addEventListener('scroll', function()
        {
var scroll=document.querySelector('.scrollTop');
scroll.classList.toggle("active" , window.scrollY>500)
        })

        function scrollToTop()
        {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }

       /*Accordian*/
    
    

       /*Meet Our Team text*/

       
