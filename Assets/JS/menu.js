$( document ).ready()
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
 



$('.menu').hover(function()
{
  
    $('#'+idd).css("background-color", "#60a5ff");
    $('#arrow'+idd).removeClass('d-none');
    $('#'+as).removeClass('d-none');
     $('#'+as).css('background-color','white');

},function()
{

     $('#'+as).addClass('d-none');
     $('.menu').css("background-color", "#ffffff");
     $('#arrow'+idd).removeClass('d-none');
     $('#arrowa').addClass('d-none');
     $('#arrowb').addClass('d-none');
     $('#arrowc').addClass('d-none');
     $('#arrowd').addClass('d-none');
     $('#arrowe').addClass('d-none');
     $('#arrowf').addClass('d-none');
     $('#arrowg').addClass('d-none');
     $('#arrowh').addClass('d-none');
     $('#arrowi').addClass('d-none');
     $('#arrowj').addClass('d-none');
     $('#arrowk').addClass('d-none');
     $('#arrowl').addClass('d-none');


});

