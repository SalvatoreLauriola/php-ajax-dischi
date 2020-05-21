import $ from "jquery";

$(document).ready(function () {
console.log('ok');



    //REFS

    var container = $('.wrapper');

    //Init Handlebars Template 
    var source =$('#entry-template').html();
    var template = Handlebars.compile(source);

    //Get Data from php
    $.ajax({
        url: 'http://localhost/php-ajax-dischi/partials/json-script.php',
        method: 'GET',
        success: function(res) {
            

            for (var i = 0; i < res.length; i++) {
                var context = {
                    poster: res[i].poster,
                    title: res[i].title,
                    author: res[i].author,
                    year: res[i].year
                }
                
                //output finale
                var output = template(context);

                //inserisci item
                container.append(output);
            }
        },
        error: function() {
            console.log('Errore chiamata');
        }



    });







});