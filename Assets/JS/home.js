//mouse ent
$('.dropdown').on('mouseover', '.dropdown', function(e) { 
    $(this).children('.dropdown-toggle').dropdown('show');
});

// Mouse leave
$('.dropdown').on('mouseleave', '.dropdown', function(e) { 
    $(this).children('.dropdown-toggle').dropdown('hide');
});

