
                var page = require('webpage').create();
                var fs = require('fs');
                page.open('http://wine-trip.com/fr/domaine-moulin-gimie', function () {
                    //fs.write('http://wine-trip.com/fr/domaine-moulin-gimie.html', page.content, 'w');
                    fs.write('coucou.html', page.content, 'w');
                    //console.log(page.content);
                    phantom.exit();
                });
            