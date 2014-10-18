
                var page = require('webpage').create();
                //page.settings.userAgent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36';
                page.settings.userAgent = 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:16.0) Gecko/20120815 Firefox/16.0';
                var fs = require('fs');
                page.open('http://wine-trip.com/fr/vigneron/domaine-moulin-gimie', function () {
                    //fs.write('http://wine-trip.com/fr/vigneron/domaine-moulin-gimie.html', page.content, 'w');
                    fs.write('coucou.html', page.content, 'w');
                    //console.log(page.content);
                    phantom.exit();
                });
            