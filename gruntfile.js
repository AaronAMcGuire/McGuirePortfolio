module.exports = function(grunt) {

    grunt.initConfig({
        watch: {
            css: {
                files: ['styles/*.scss'],
                tasks: ['cssmin']
            },
            js: {
                files: ['js/*.js'],
                tasks: ['concat']
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: ['vendors/swiper.min.js', 'js/script.js'],
                dest: 'js/main.js',
            },
        },
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'styles/stylesheet.min.css': ['vendors/hamburgers.min.css', 'styles/fonts.css', 'styles/style.css']
                }
            }
        },
        criticalcss: {
            custom: {
                options: {
                    url: "http://www.aaronmcguire.co.uk",
                    width: 1200,
                    height: 900,
                    outputfile: "styles/critical.css",
                    filename: "styles/stylesheet.min.css", // Using path.resolve( path.join( ... ) ) is a good idea here
                    buffer: 800 * 1024,
                    ignoreConsole: true
                }
            }
        },
        pagespeed: {
            options: {
                nokey: true,
                url: "https://developers.google.com"
            },
            prod: {
                options: {
                    url: "http://aaronmcguire.co.uk",
                    locale: "en_GB",
                    strategy: "desktop",
                    threshold: 80
                }
            }
        },
        accessibility: {
  options: {
    accessibilityLevel: 'WCAG2A'
  },
  test: {
    options: {
      urls: ['http://aaronmcguirecouk.dev']
    },
    src: ['aaronmcguirecouk/*.php']
  }
},
  browserSync: {
    dev: {
        bsFiles: {
            src : 'styles/stylesheet.min.css'
        },
        options: {
            proxy: "aaronmcguirecouk.dev"
        }
    }
},
autoprefixer: {
    options: {
       safe: true
    },
    your_target: {
      // Target-specific file lists and/or options go here.
    'styles/style.css': 'styles/stylesheet.min.css'
    },
  },


    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-criticalcss');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-pagespeed');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-accessibility');
    grunt.loadNpmTasks('grunt-autoprefixer');





    grunt.registerTask('default', []);

};
