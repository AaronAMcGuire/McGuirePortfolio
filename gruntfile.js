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
                src: ['js/script.js'],
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
                    'styles/stylesheet.min.css': ['vendors/hamburgers.min.css','styles/style.css']
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



    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-pagespeed');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-accessibility');





    grunt.registerTask('default', []);

};
