$(".rating").starRating({
    totalStars: 5,
    starShape: 'rounded',
    starSize: 40,
    emptyColor: 'lightgray',
    hoverColor: 'salmon',
    activeColor: 'crimson',
    useGradient: false,
    callback: function(currentRating, $el){
        var id = $el.attr('field-id');
        saveToDatabase(id,currentRating);
    }
});
function saveToDatabase(id,rating) {
    $.ajax({
        url: 'rating.php',
        type: 'POST',
        data: 'id='+id+'&rating='+rating,
        success: function (response) {
            var data = response.split(',');
            if(data[1] == 3) {
                $('#message-'+data[0]).html('Uspesno ocenili teren')
            } else if(data[1] == 2) {
                $('#message-'+data[0]).html('Došlo je do greške... Pokušajte ponovo kasnije!')
            } else if (data[1] == 1) {
                $('#message-'+data[0]).html('Već ste ocenili ovaj teren!')
            }
        }
    })
}