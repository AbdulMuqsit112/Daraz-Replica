var as;
var idd;
$('.menu').mouseover(function() {
    idd=this.id;
    if(this.id=='a')
    {
         as='A';
    }
    else if(this.id=='b')
    {
         as='B'
    }
    else if(this.id=='c')
    {
         as='C'
         
    }
    else if(this.id=='d')
    {
         as='D'
         
    }
    else if(this.id=='e')
    {
         as='E'
   }
    else if(this.id=='f')
    {
         as='F'
        
    }
    else if(this.id=='g')
    {
         as='G'
         
        
    }
    else if(this.id=='h')
    {
         as='H'
         
    }
    else if(this.id=='i')
    {
         as='I'
         
    }
    else if(this.id=='j')
    {
         as='J'
         
    }
    else if(this.id=='k')
    {
         as='K'
         
    }
    else if(this.id=='l')
    {
         as='L'
         
    }
 });



$( ".menu" )
  .mouseenter(function() {
    $('#'+idd).append( $( "#"+as ) );  
    $('#'+idd).css("background-color", "#60a5ff");
    
    $('#'+as).show();
    $('#'+as).css('background-color','white')
    $('#'+as).animate({
        width:200
    })
  })
  .mouseleave(function() {
    $('.menu').css("background-color", "#ffffff");
    $('#'+as).hide();
  });

  